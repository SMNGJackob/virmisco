<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-27 (date of last modification)
     * @since 2015-07-27 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class _DummyCommandTemplate extends AbstractCommand
    {

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $aggregateId The unique identifier of the aggregate to receive this command.
         */
        public function __construct(
            Uuid $aggregateId
        ) {
            parent::__construct($aggregateId);
        }
    }
