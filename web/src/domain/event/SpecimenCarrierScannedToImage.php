<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-08 (date of last modification)
     * @since 2015-09-08 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class SpecimenCarrierScannedToImage extends AbstractEvent
    {
        /** @var string */
        private $creationTime;
        /** @var string */
        private $modificationTime;
        /** @var string */
        private $realPath;
        /** @var string */
        private $uri;

        /**
         * SpecimenCarrierScannedToImage constructor.
         * @param string $realPath
         * @param string $uri
         * @param string $creationTime
         * @param string $modificationTime
         */
        public function __construct($realPath, $uri, $creationTime, $modificationTime)
        {
            parent::__construct();
            $this->realPath = $realPath;
            $this->uri = $uri;
            $this->creationTime = $creationTime;
            $this->modificationTime = $modificationTime;
        }

        /**
         * @return string
         */
        public function getCreationTime()
        {
            return $this->creationTime;
        }

        /**
         * @return string
         */
        public function getModificationTime()
        {
            return $this->modificationTime;
        }

        /**
         * @return string
         */
        public function getRealPath()
        {
            return $this->realPath;
        }

        /**
         * @return string
         */
        public function getUri()
        {
            return $this->uri;
        }
    }
