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

    class ValidNameInitiallyAssignedToTaxon extends AbstractEvent
    {
        /** @var ScientificName */
        private $validName;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param ScientificName $validName
         */
        public function __construct(ScientificName $validName)
        {
            parent::__construct();
            $this->validName = $validName;
        }

        /**
         * @return ScientificName
         */
        public function getValidName()
        {
            return $this->validName;
        }
    }
