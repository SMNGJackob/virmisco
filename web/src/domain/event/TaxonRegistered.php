<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-13 (date of last modification)
     * @since 2015-09-13 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;


    use sednasoft\virmisco\singiere\AbstractEvent;

    class TaxonRegistered extends AbstractEvent
    {

        /**
         */
        public function __construct()
        {
            parent::__construct();
        }
    }
