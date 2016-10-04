<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-16 (date of last modification)
     * @since 2015-09-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class ChangeDicPrismPositionOfPhotomicrograph extends AbstractCommand
    {
        /** @var float */
        private $dicPrismPosition;

        /**
         * ChangeDicPrismPositionOfPhotomicrograph constructor.
         * @param Uuid $aggregateId
         * @param float $dicPrismPosition
         */
        public function __construct(Uuid $aggregateId, $dicPrismPosition)
        {
            parent::__construct($aggregateId);
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
