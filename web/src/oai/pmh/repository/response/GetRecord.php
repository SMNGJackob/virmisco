<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\response;

    use sednasoft\virmisco\oai\pmh\repository\data\Record;
    use sednasoft\virmisco\oai\pmh\repository\Response;

    /**
     * A successful response to a GetRecord request.
     */
    interface GetRecord extends Response
    {
        /**
         * @param Record $record Metadata about a resource expressed in a single format.
         */
        public function setRecord (Record $record);
    }
