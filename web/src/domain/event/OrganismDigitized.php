<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-08 (date of last modification)
     * @since 2015-09-08 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;
    use sednasoft\virmisco\singiere\Uuid;

    class OrganismDigitized extends AbstractEvent
    {
        /** @var Uuid */
        private $photomicrographId;
        /** @var string */
        private $sequenceNumber;

        /**
         * @param string $sequenceNumber
         * @param Uuid $photomicrographId
         */
        public function __construct($sequenceNumber, Uuid $photomicrographId)
        {
            parent::__construct();
            $this->sequenceNumber = $sequenceNumber;
            $this->photomicrographId = $photomicrographId;
        }

        /**
         * @return Uuid
         */
        public function getPhotomicrographId()
        {
            return $this->photomicrographId;
        }

        /**
         * @return string
         */
        public function getSequenceNumber()
        {
            return $this->sequenceNumber;
        }
    }
