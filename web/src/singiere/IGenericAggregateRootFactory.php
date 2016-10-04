<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere;

    /**
     * Generic factory for creating arbitrary aggregates from their class name and their ID.
     */
    interface IGenericAggregateRootFactory {

        /**
         * @param string $className
         * @param Uuid $aggregateId
         * @return AbstractAggregateRoot
         */
        public function createAggregateByClass($className, Uuid $aggregateId);
    }
