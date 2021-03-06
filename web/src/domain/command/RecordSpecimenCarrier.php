<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-19 (date of last modification)
     * @since 2015-08-19 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class RecordSpecimenCarrier extends AbstractCommand
    {
        /** @var string */
        private $carrierNumber;
        /** @var Uuid */
        private $gatheringId;
        /** @var string */
        private $labelTranscript;
        /** @var string */
        private $owner;
        /** @var string */
        private $preparationType;
        /** @var string */
        private $previousCollection;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $specimenCarrierId The unique identifier of the aggregate to receive this command.
         * @param Uuid $gatheringId
         * @param string $carrierNumber
         * @param string $preparationType
         * @param string $owner
         * @param string $previousCollection
         * @param string $labelTranscript
         */
        public function __construct(
            Uuid $specimenCarrierId,
            Uuid $gatheringId,
            $carrierNumber,
            $preparationType,
            $owner,
            $previousCollection,
            $labelTranscript
        ) {
            parent::__construct($specimenCarrierId);
            $this->gatheringId = $gatheringId;
            $this->carrierNumber = (string)$carrierNumber;
            $this->preparationType = (string)$preparationType;
            $this->owner = (string)$owner;
            $this->previousCollection = (string)$previousCollection;
            $this->labelTranscript = (string)$labelTranscript;
        }

        /**
         * @return string
         */
        public function getCarrierNumber()
        {
            return $this->carrierNumber;
        }

        /**
         * @return Uuid
         */
        public function getGatheringId()
        {
            return $this->gatheringId;
        }

        /**
         * @return string
         */
        public function getLabelTranscript()
        {
            return $this->labelTranscript;
        }

        /**
         * @return string
         */
        public function getOwner()
        {
            return $this->owner;
        }

        /**
         * @return string
         */
        public function getPreparationType()
        {
            return $this->preparationType;
        }

        /**
         * @return string
         */
        public function getPreviousCollection()
        {
            return $this->previousCollection;
        }
    }
