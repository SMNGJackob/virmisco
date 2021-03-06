<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-27 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere;

    /**
     * Can load existing aggregates (from its cache or a connected event store) and create new ones.
     */
    interface IRepository
    {
        /**
         * Creates a new aggregate.
         *
         * @param string $className The name of a subclass of AbstractAggregateRoot.
         * @param Uuid|null $aggregateId The ID to use for the aggregate or null to auto-generate one.
         * @return AbstractAggregateRoot The new aggregate with an empty change history.
         */
        public function create($className, Uuid $aggregateId = null);

        /**
         * Reconstitutes an existing aggregate.
         *
         * @param string $className The name of a subclass of AbstractAggregateRoot.
         * @param Uuid $aggregateId The ID of the aggregate to load.
         * @return AbstractAggregateRoot The aggregate completely reconstituted from its event stream.
         */
        public function load($className, Uuid $aggregateId);

        /**
         * Saves the aggregate's changes in the associated event store.
         *
         * @param AbstractAggregateRoot $aggregate
         */
        public function save(AbstractAggregateRoot $aggregate);
    }
