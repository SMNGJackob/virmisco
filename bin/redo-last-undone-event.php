<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-11-28 (date of last modification)
     * @since 2015-10-18 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    use sednasoft\virmisco\domain\RedisEventStore;

    const EVENTS_ALL = 'events/all';
    const EVENTS_AGGREGATE = 'events/aggregate/';
    require_once __DIR__ . '/../web/vendor/autoload.php';
    require_once __DIR__ . '/../web/src/credentials.php';
    $eventStore = new RedisEventStore(REDIS_URI);
    $eventStore->append(unserialize(file_get_contents('last-undone-event.dat')));
    unlink('last-undone-event.dat');
