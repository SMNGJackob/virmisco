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

    class SpecimenFromGatheringPreserved extends AbstractEvent
    {
        /** @var Uuid */
        private $specimenCarrierId;

        /**
         * SpecimenFromGatheringPreserved constructor.
         * @param Uuid $specimenCarrierId
         */
        public function __construct(UUid $specimenCarrierId)
        {
            parent::__construct();
            $this->specimenCarrierId = $specimenCarrierId;
        }

        /**
         * @return Uuid
         */
        public function getSpecimenCarrierId()
        {
            return $this->specimenCarrierId;
        }
    }
