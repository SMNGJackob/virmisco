<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\response;

    use sednasoft\virmisco\oai\pmh\repository\data\Header;
    use sednasoft\virmisco\oai\pmh\repository\Response;
    use sednasoft\virmisco\oai\pmh\repository\response\feature\Incomplete;

    /**
     * A successful response to a ListIdentifiers request.
     */
    interface ListIdentifiers extends Response, Incomplete
    {
        /**
         * @param Header $header A header object identifying a record.
         */
        public function addHeader (Header $header);
    }
