<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-11-09 (date of last modification)
     * @since 2015-09-08 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class OrganismOnSpecimenCarrierDescribed extends AbstractEvent
    {
        /** @var string */
        private $phaseOrStage;
        /** @var string */
        private $remarks;
        /** @var string */
        private $sequenceNumber;
        /** @var string */
        private $sex;

        /**
         * OrganismOnSpecimenCarrierDescribed constructor.
         * @param string $sequenceNumber
         * @param string $sex
         * @param string $phaseOrStage
         * @param string $remarks
         */
        public function __construct($sequenceNumber, $sex, $phaseOrStage, $remarks)
        {
            parent::__construct();
            $this->sequenceNumber = strval($sequenceNumber);
            $this->sex = $sex;
            $this->phaseOrStage = $phaseOrStage;
            $this->remarks = $remarks;
        }

        /**
         * @return string
         */
        public function getPhaseOrStage()
        {
            return $this->phaseOrStage;
        }

        /**
         * @return string
         */
        public function getRemarks()
        {
            return $this->remarks;
        }

        /**
         * @return string
         */
        public function getSequenceNumber()
        {
            return $this->sequenceNumber;
        }

        /**
         * @return string
         */
        public function getSex()
        {
            return $this->sex;
        }
    }
