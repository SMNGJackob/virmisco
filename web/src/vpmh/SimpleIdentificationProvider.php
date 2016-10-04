<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-03 (date of last modification)
     * @since 2015-08-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\vpmh;

    /**
     * Provides identification data directly from constructor parameters.
     */
    class SimpleIdentificationProvider implements IIdentificationProvider
    {
        /** @var string */
        private $adminEmail;
        /** @var string */
        private $baseUrl;
        /** @var string */
        private $repositoryName;

        /**
         * @param string $repositoryName
         * @param string $baseUrl
         * @param string $adminEmail
         */
        function __construct($repositoryName, $baseUrl, $adminEmail)
        {
            $this->adminEmail = $adminEmail;
            $this->baseUrl = $baseUrl;
            $this->repositoryName = $repositoryName;
        }

        /**
         * @return string
         */
        public function getAdminEmail()
        {
            return $this->adminEmail;
        }

        /**
         * @return string
         */
        public function getBaseUrl()
        {
            return $this->baseUrl;
        }

        /**
         * @return string
         */
        public function getRepositoryName()
        {
            return $this->repositoryName;
        }
    }
