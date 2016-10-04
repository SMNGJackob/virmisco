<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request\feature;

    /**
     * Enables resuming a partial list response for a request by including an optional and exclusive resumption token.
     */
    interface Resumable
    {
        /**
         * @return string|null An exclusive argument with a value that is the flow control token returned by a previous
         * ListIdentifiers request that issued an incomplete list.
         */
        public function getResumptionToken();

        /**
         * @return bool Whether the optional but exclusive resumptionToken argument is present, in which case none of
         * the other arguments are allowed.
         */
        public function hasResumptionToken();
    }
