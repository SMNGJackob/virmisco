<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-03 (date of last modification)
     * @since 2015-08-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\vpmh;

    interface IIdentificationProvider
    {
        /**
         * @return string
         */
        public function getAdminEmail();

        /**
         * @return string
         */
        public function getBaseUrl();

        /**
         * @return string
         */
        public function getRepositoryName();
    }
