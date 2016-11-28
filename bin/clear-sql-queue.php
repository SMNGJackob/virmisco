<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-11-28 (date of last modification)
     * @since 2015-10-18 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    use Predis\Collection\Iterator\ListKey as ListKeyIterator;
    use sednasoft\virmisco\domain\projection\SqlQueue;

    require_once __DIR__ . '/../web/vendor/autoload.php';
    require_once __DIR__ . '/../web/src/credentials.php';
    $sqlQueue = new SqlQueue(REDIS_URI, REDIS_SQL_QUEUE);
    $redis = $sqlQueue->transform();
    foreach (new ListKeyIterator($redis, REDIS_SQL_QUEUE) as $value) {
        echo $value, "\n";
    }
    $redis->del([REDIS_SQL_QUEUE]);
