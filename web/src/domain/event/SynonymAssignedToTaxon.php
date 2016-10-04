<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-08 (date of last modification)
     * @since 2015-09-08 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\domain\valueobject\ScientificName;
    use sednasoft\virmisco\singiere\AbstractEvent;

    class SynonymAssignedToTaxon extends AbstractEvent
    {
        /** @var ScientificName */
        private $synonym;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param ScientificName $synonym
         */
        public function __construct(ScientificName $synonym)
        {
            parent::__construct();
            $this->synonym = $synonym;
        }

        /**
         * @return ScientificName
         */
        public function getSynonym()
        {
            return $this->synonym;
        }
    }
