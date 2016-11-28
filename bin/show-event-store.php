<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-11-28 (date of last modification)
     * @since 2016-06-12 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    use Predis\Client as PredisClient;
    use Predis\Collection\Iterator\ListKey as ListKeyIter;
    use sednasoft\virmisco\domain\RedisEventStore;

    require_once __DIR__ . '/../web/vendor/autoload.php';
    require_once __DIR__ . '/../web/src/credentials.php';
    const EVENTS_ALL = 'events/all';
    const EVENTS_AGGREGATE = 'events/aggregate/';
    $redis = new PredisClient(REDIS_URI);
    $eventStore = new RedisEventStore(REDIS_URI);
    $jsonOptions = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
    foreach (new ListKeyIter($redis, EVENTS_ALL) as $eventAddress) {
        list($uuid, $version) = explode(':', $eventAddress);
        $eventRecord = $redis->lindex(EVENTS_AGGREGATE . $uuid, intval($version));
        list($version, $type, $binary, $json) = explode(':', $eventRecord, 4);
        $data = json_decode($json);
        list($timestamp) = explode('.', $data->{'@timestamp'}, 2);
        printf("%s  %s  %03d  %s  %s\n", $timestamp, $uuid, $version, $type, json_encode($data, $jsonOptions));
    }
