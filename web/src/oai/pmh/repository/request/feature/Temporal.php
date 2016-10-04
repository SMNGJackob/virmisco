<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request\feature;

    use DateTimeInterface;

    /**
     * Enables selective harvesting for a request based on an optional date/time range.
     */
    interface Temporal
    {

        /**
         * @return DateTimeInterface|null An optional argument with a UTCdatetime value, which specifies a lower bound
         * for datestamp-based selective harvesting.
         */
        public function getFrom();

        /**
         * @return DateTimeInterface|null An optional argument with a UTCdatetime value, which specifies an upper bound
         * for datestamp-based selective harvesting.
         */
        public function getUntil();

        /**
         * @return bool Whether the optional from argument is present.
         */
        public function hasFrom();

        /**
         * @return bool Whether the optional until argument is present.
         */
        public function hasUntil();
    }
