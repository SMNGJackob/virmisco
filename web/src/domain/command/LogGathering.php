<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-19 (date of last modification)
     * @since 2015-07-27 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class LogGathering extends AbstractCommand
    {
        /** @var string */
        private $agentOrganization;
        /** @var string */
        private $agentPerson;
        /** @var string */
        private $journalNumber;
        /** @var string */
        private $locationCountry;
        /** @var string */
        private $locationPlace;
        /** @var string */
        private $locationProvince;
        /** @var string */
        private $locationRegion;
        /** @var string */
        private $remarks;
        /** @var string */
        private $samplingDateAfter;
        /** @var string */
        private $samplingDateBefore;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $gatheringId The unique identifier of the aggregate to receive this command.
         * @param string $journalNumber
         * @param string $samplingDateAfter
         * @param string $samplingDateBefore
         * @param string $agentPerson
         * @param string $agentOrganization
         * @param string $locationCountry
         * @param string $locationProvince
         * @param string $locationRegion
         * @param string $locationPlace
         * @param string $remarks
         */
        public function __construct(
            Uuid $gatheringId,
            $journalNumber,
            $samplingDateAfter,
            $samplingDateBefore,
            $agentPerson,
            $agentOrganization,
            $locationCountry,
            $locationProvince,
            $locationRegion,
            $locationPlace,
            $remarks
        ) {
            parent::__construct($gatheringId);
            $this->journalNumber = (string)$journalNumber;
            $this->samplingDateAfter = (string)$samplingDateAfter;
            $this->samplingDateBefore = (string)$samplingDateBefore;
            $this->agentPerson = (string)$agentPerson;
            $this->agentOrganization = (string)$agentOrganization;
            $this->locationCountry = (string)$locationCountry;
            $this->locationProvince = (string)$locationProvince;
            $this->locationRegion = (string)$locationRegion;
            $this->locationPlace = (string)$locationPlace;
            $this->remarks = (string)$remarks;
        }

        /**
         * @return string
         */
        public function getAgentOrganization()
        {
            return $this->agentOrganization;
        }

        /**
         * @return string
         */
        public function getAgentPerson()
        {
            return $this->agentPerson;
        }

        /**
         * @return string
         */
        public function getJournalNumber()
        {
            return $this->journalNumber;
        }

        /**
         * @return string
         */
        public function getLocationCountry()
        {
            return $this->locationCountry;
        }

        /**
         * @return string
         */
        public function getLocationPlace()
        {
            return $this->locationPlace;
        }

        /**
         * @return string
         */
        public function getLocationProvince()
        {
            return $this->locationProvince;
        }

        /**
         * @return string
         */
        public function getLocationRegion()
        {
            return $this->locationRegion;
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
        public function getSamplingDateAfter()
        {
            return $this->samplingDateAfter;
        }

        /**
         * @return string
         */
        public function getSamplingDateBefore()
        {
            return $this->samplingDateBefore;
        }
    }
