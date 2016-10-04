<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-10-18 (date of last modification)
     * @since 2015-07-27 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain;

    use sednasoft\virmisco\singiere\AbstractEvent;

    /**
     * Publishes events. Usually a repository will maintain an instance and forward events to it after appending them to
     * the event store when saving an aggregate.
     */
    interface IEventPublisher
    {
        /**
         * @param AbstractEvent $event
         */
        public function publish(AbstractEvent $event);
    }
