<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-01-20 (date of last modification)
     * @since 2016-01-20 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class PhotomicrographDeleted extends AbstractEvent
    {
        /**
         * PhotomicrographRenamed constructor.
         */
        public function __construct()
        {
            parent::__construct();
        }
    }
