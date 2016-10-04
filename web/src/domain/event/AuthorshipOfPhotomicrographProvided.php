<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-11-12 (date of last modification)
     * @since 2015-11-12 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class AuthorshipOfPhotomicrographProvided extends AbstractEvent
    {
        /** @var string */
        private $creatorCapturingDigitalMaster;
        /** @var string */
        private $creatorProcessingDerivatives;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param string $creatorCapturingDigitalMaster
         * @param string $creatorProcessingDerivatives
         */
        public function __construct(
            $creatorCapturingDigitalMaster,
            $creatorProcessingDerivatives
        ) {
            parent::__construct();
            $this->creatorCapturingDigitalMaster = $creatorCapturingDigitalMaster;
            $this->creatorProcessingDerivatives = $creatorProcessingDerivatives;
        }

        /**
         * @return string
         */
        public function getCreatorCapturingDigitalMaster()
        {
            return $this->creatorCapturingDigitalMaster;
        }

        /**
         * @return string
         */
        public function getCreatorProcessingDerivatives()
        {
            return $this->creatorProcessingDerivatives;
        }
    }
