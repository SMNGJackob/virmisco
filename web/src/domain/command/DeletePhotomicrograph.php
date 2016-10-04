<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-01-20 (date of last modification)
     * @since 2016-01-20 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class DeletePhotomicrograph extends AbstractCommand
    {
        /**
         * ChangeDicPrismPositionOfPhotomicrograph constructor.
         * @param Uuid $aggregateId
         */
        public function __construct(Uuid $aggregateId)
        {
            parent::__construct($aggregateId);
        }
    }
