<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-10-18 (date of last modification)
     * @since 2015-07-05 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain;

    use sednasoft\virmisco\domain\entity\Gathering;
    use sednasoft\virmisco\domain\entity\Photomicrograph;
    use sednasoft\virmisco\domain\entity\SpecimenCarrier;
    use sednasoft\virmisco\domain\entity\Taxon;
    use sednasoft\virmisco\domain\error\AggregateNotSupportedException;
    use sednasoft\virmisco\singiere\AbstractAggregateRoot;
    use sednasoft\virmisco\singiere\IGenericAggregateRootFactory;
    use sednasoft\virmisco\singiere\Uuid;

    /**
     * A simple switch-based factory without any auto-instantiation witchcraft. Add more classes when needed.
     */
    class Factory implements IGenericAggregateRootFactory
    {

        /**
         * @param string $className
         * @param Uuid $aggregateId
         * @return AbstractAggregateRoot
         * @throws AggregateNotSupportedException
         */
        public function createAggregateByClass($className, Uuid $aggregateId)
        {
            switch ($className) {
                case Taxon::class:
                    return new Taxon($aggregateId);
                case Gathering::class:
                    return new Gathering($aggregateId);
                case SpecimenCarrier::class:
                    return new SpecimenCarrier($aggregateId);
                case Photomicrograph::class:
                    return new Photomicrograph($aggregateId);
            }
            throw new AggregateNotSupportedException($className);
        }
    }
