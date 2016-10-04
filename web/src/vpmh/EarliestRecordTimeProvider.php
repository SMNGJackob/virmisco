<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-17 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\vpmh;

    use DateTime;

    /**
     * Retrieves the earliest datestamp any record in the repository can have as creation or modification date.
     */
    interface EarliestRecordTimeProvider
    {
        /**
         * @return DateTime
         */
        public function getEarliestRecordTime();
    }
