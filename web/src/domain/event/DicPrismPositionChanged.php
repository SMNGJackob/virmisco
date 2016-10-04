<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-16 (date of last modification)
     * @since 2015-09-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class DicPrismPositionChanged extends AbstractEvent
    {
        /** @var float */
        private $dicPrismPosition;

        /**
         * DicPrismPositionChanged constructor.
         * @param float $dicPrismPosition
         */
        public function __construct($dicPrismPosition)
        {
            parent::__construct();
            $this->dicPrismPosition = $dicPrismPosition;
        }

        /**
         * @return float
         */
        public function getDicPrismPosition()
        {
            return $this->dicPrismPosition;
        }
    }
