<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-20 (date of last modification)
     * @since 2015-08-20 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class ScanSpecimenCarrier extends AbstractCommand
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
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $specimenCarrierId The unique identifier of the aggregate to receive this command.
         * @param string $realPath
         * @param string $uri
         * @param string $creationTime
         * @param string $modificationTime
         */
        public function __construct(
            Uuid $specimenCarrierId,
            $realPath,
            $uri,
            $creationTime,
            $modificationTime
        ) {
            parent::__construct($specimenCarrierId);
            $this->realPath = (string)$realPath;
            $this->uri = (string)$uri;
            $this->creationTime = (string)$creationTime;
            $this->modificationTime = (string)$modificationTime;
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
