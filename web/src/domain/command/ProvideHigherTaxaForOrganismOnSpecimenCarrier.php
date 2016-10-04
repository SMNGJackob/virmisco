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

    class ProvideHigherTaxaForOrganismOnSpecimenCarrier extends AbstractCommand
    {
        /** @var string */
        private $higherTaxa;
        /** @var string */
        private $sequenceNumber;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $specimenCarrierId The unique identifier of the aggregate to receive this command.
         * @param string $sequenceNumber
         * @param string $higherTaxa
         */
        public function __construct(
            Uuid $specimenCarrierId,
            $sequenceNumber,
            $higherTaxa
        ) {
            parent::__construct($specimenCarrierId);
            $this->sequenceNumber = (string)$sequenceNumber;
            $this->higherTaxa = $higherTaxa;
        }

        /**
         * @return string
         */
        public function getHigherTaxa()
        {
            return $this->higherTaxa;
        }

        /**
         * @return string
         */
        public function getSequenceNumber()
        {
            return $this->sequenceNumber;
        }
    }
