<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    /**
     * Thrown when trying to append an event to the event store that creates a version conflict due to other events that
     * have been appended in the meantime.
     */
    class ConflictingVersionException extends AbstractEventStoreException
    {
    }
