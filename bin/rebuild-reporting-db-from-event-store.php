<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-11-28 (date of last modification)
     * @since 2015-09-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    use Predis\Client as PredisClient;
    use sednasoft\virmisco\domain\projection\SqlQueue;
    use sednasoft\virmisco\domain\RedisEventStore;

    require_once __DIR__ . '/../web/vendor/autoload.php';
    require_once __DIR__ . '/../web/src/credentials.php';

    //region clean any left-overs in the SQL queue, actually this should never happen to be necessary
    $redis = new PredisClient(REDIS_URI);
    $redis->del(REDIS_SQL_QUEUE);
    //endregion

    //region wipe the reporting database
    $mariadb = new PDO(MARIA_DSN, MARIA_USER, MARIA_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    foreach (explode(";\n\n", file_get_contents(__DIR__ . '/../web/sql/create-reporting-tables.sql')) as $statement) {
        $mariadb->exec($statement);
    }
    //endregion

    //region replay all events and project them into the SQL queue
    $eventStore = new RedisEventStore(REDIS_URI);
    $projection = new SqlQueue(REDIS_URI, REDIS_SQL_QUEUE);
    foreach ($eventStore->iterateEventsForAllAggregates() as $event) {
        $eventArray = (array)$event;
        if (array_key_exists('__PHP_Incomplete_Class_Name', $eventArray)) {
            echo $eventArray['__PHP_Incomplete_Class_Name'], " not found\n";
        }
        $projection->apply($event);
    }
    $redis = $projection->transform();
    //endregion

    //region echo and execute every statement in the SQL queue, rebuilding the reporting database
    try {
        foreach ($projection->commitToDatabase($mariadb) as $statement => $values) {
            printf("%s\n", $statement);
            foreach ($values as $k => $v) {
                printf("\t%s: %s\n", $k, json_encode($v));
            }
            echo "\n";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        throw $e->getPrevious();
    }
    //endregion
