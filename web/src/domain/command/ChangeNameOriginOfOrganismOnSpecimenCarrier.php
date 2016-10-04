<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-12-02 (date of last modification)
     * @since 2015-12-02 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class ChangeNameOriginOfOrganismOnSpecimenCarrier extends AbstractCommand
    {
        /** @var string */
        private $identifier;
        /** @var string */
        private $qualifier;
        /** @var string */
        private $sequenceNumber;
        /** @var string */
        private $typeStatus;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $specimenCarrierId The unique identifier of the aggregate to receive this command.
         * @param string $sequenceNumber
         * @param string $typeStatus
         * @param string $identifier
         * @param string $qualifier
         */
        public function __construct(
            Uuid $specimenCarrierId,
            $sequenceNumber,
            $typeStatus,
            $identifier,
            $qualifier
        ) {
            parent::__construct($specimenCarrierId);
            $this->sequenceNumber = (string)$sequenceNumber;
            $this->typeStatus = $typeStatus;
            $this->identifier = $identifier;
            $this->qualifier = $qualifier;
        }

        /**
         * @return string
         */
        public function getIdentifier()
        {
            return $this->identifier;
        }

        /**
         * @return string
         */
        public function getQualifier()
        {
            return $this->qualifier;
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
        public function getTypeStatus()
        {
            return $this->typeStatus;
        }
    }
