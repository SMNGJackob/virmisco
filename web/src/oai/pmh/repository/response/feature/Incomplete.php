<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\response\feature;

    use sednasoft\virmisco\oai\pmh\repository\data\ResumptionToken;

    /**
     * Enables a response to enumerate only a certain portion of a large list-based result by sending a token to the
     * client which it can use to resume the request to collect the entire list piece by piece.
     */
    interface Incomplete
    {
        /**
         * @param ResumptionToken $resumptionToken A flow control token that marks the result as incomplete and allows
         * the client to continue from that point.
         */
        public function setResumptionToken(ResumptionToken $resumptionToken);
    }
