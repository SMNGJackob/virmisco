<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-01-11 (date of last modification)
     * @since 2016-01-11 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class OrganismDescriptionDiscarded extends AbstractEvent
    {
        /** @var string */
        private $sequenceNumber;

        /**
         * SynonymsOfOrganismCleared constructor.
         * @param string $sequenceNumber
         */
        public function __construct($sequenceNumber)
        {
            parent::__construct();
            $this->sequenceNumber = $sequenceNumber;
        }

        /**
         * @return string
         */
        public function getSequenceNumber()
        {
            return $this->sequenceNumber;
        }
    }
