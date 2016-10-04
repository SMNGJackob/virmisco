<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-15 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere;

    use Generator;

    /**
     * Provides persistence capabilities for domain events in an append-only manner. Subclasses may implement various
     * ways of storing these events, be it in-memory, in a folder structure or an RDBMS.
     */
    interface IEventStore
    {

        /**
         * Appends the event to the data store.
         *
         * @param AbstractEvent $event The event to be stored.
         */
        public function append(AbstractEvent $event);

        /**
         * Seek through the data store from the oldest to the newest entry and return only those events meant for the
         * aggregate with the given identifier.
         *
         * @param Uuid $aggregateId The aggregate identifier.
         * @return Generator An AbstractEvent for every event on the aggregate.
         */
        public function iterateEventsForAggregate(Uuid $aggregateId);

        /**
         * Iterate through the data store from the oldest to the newest entry and return all events.
         *
         * @return Generator
         */
        public function iterateEventsForAllAggregates();
    }
