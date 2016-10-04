<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere;

    /**
     * A command sent to the domain. When handled by the domain, either events are generated or exceptions thrown. Its
     * name should by in the form MakeThingHappen or FoobarizeBazWithQuux.
     */
    abstract class AbstractCommand
    {
        /** @var Uuid */
        private $aggregateId;

        /**
         * Creates a new instance. Subclasses should add more parameters for payload.
         *
         * @param Uuid $aggregateId The unique identifier of the aggregate to receive this command.
         */
        public function __construct(Uuid $aggregateId)
        {
            $this->aggregateId = $aggregateId;
        }

        /**
         * Returns the unique identifier of the aggregate to receive this command.
         *
         * @return Uuid The aggregate identifier.
         */
        public function getAggregateId()
        {
            return $this->aggregateId;
        }
    }
