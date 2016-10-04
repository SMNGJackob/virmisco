<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-11-09 (date of last modification)
     * @since 2015-11-09 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\projection;

    class SqlQueueSubselect
    {
        /** @var string */
        public $column = '';
        /** @var string[] */
        public $filters = [];
        /** @var string */
        public $table = '';

        /**
         * @param string $table
         * @param string $column
         */
        public function __construct($table, $column)
        {
            $this->column = $column;
            $this->table = $table;
        }

        /**
         * @param string $column
         * @param string|null $value
         */
        public function addFilter($column, $value)
        {
            $this->filters[$column] = $value;
        }
    }
