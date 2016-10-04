<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-16 (date of last modification)
     * @since 2015-09-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\event;

    use sednasoft\virmisco\singiere\AbstractEvent;

    class PhotomicrographRenamed extends AbstractEvent
    {
        /** @var string */
        private $title;

        /**
         * PhotomicrographRenamed constructor.
         * @param string $title
         */
        public function __construct($title)
        {
            parent::__construct();
            $this->title = $title;
        }

        /**
         * @return string
         */
        public function getTitle()
        {
            return $this->title;
        }
    }
