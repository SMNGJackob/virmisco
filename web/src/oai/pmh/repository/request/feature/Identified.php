<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request\feature;

    /**
     * Restricts a request to a specific repository item using a mandatory identifier.
     */
    interface Identified
    {
        /**
         * @return string A required argument that specifies the unique identifier of the item in the repository from
         * which the record must be disseminated.
         */
        public function getIdentifier();
    }
