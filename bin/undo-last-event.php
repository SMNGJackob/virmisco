<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-11-28 (date of last modification)
     * @since 2015-10-18 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    use Predis\Client as Redis;
    use sednasoft\virmisco\domain\RedisEventStore;

    const EVENTS_ALL = 'events/all';
    const EVENTS_AGGREGATE = 'events/aggregate/';
    require_once __DIR__ . '/../web/vendor/autoload.php';
    require_once __DIR__ . '/../web/src/credentials.php';
    $redis = new Redis(REDIS_URI);
    $eventStore = new RedisEventStore(REDIS_URI);
    $lastOfAll = $redis->rpop(EVENTS_ALL);
    list($uuid, $version) = explode(':', $lastOfAll);
    $lastOfAggregate = $redis->rpop(EVENTS_AGGREGATE . $uuid);
    list($version, $type, $binary, $json) = explode(':', $lastOfAggregate, 4);
    $data = gzuncompress(base64_decode($binary));
    file_put_contents('last-undone-event.dat', $data);
    $jsonOptions = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
    echo $type, " ", json_encode(json_decode($json), $jsonOptions);
