<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-09-16 (date of last modification)
     * @since 2015-09-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\command;

    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\Uuid;

    class RenamePhotomicrograph extends AbstractCommand
    {
        /** @var string */
        private $title;

        /**
         * RenamePhotomicrograph constructor.
         * @param Uuid $aggregateId
         * @param $title
         */
        public function __construct(Uuid $aggregateId, $title)
        {
            parent::__construct($aggregateId);
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
