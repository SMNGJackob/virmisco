<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-02 (date of last modification)
     * @since 2015-08-02 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain;

    use PDO;
    use sednasoft\virmisco\singiere\AbstractEvent;

    /**
     * Provides persistence capabilities for domain events in an append-only manner within a MariaDB database. The
     * column names in this implementation are fixed, but can be altered through subclasses. The table name has to be
     * provided during instantiation.
     */
    class MariaDbEventStore extends AbstractSqlEventStore
    {
        /** @var PDO */
        private $connection;
        /** @var string */
        private $tableName;

        /**
         * @param PDO $connection
         * @param string $tableName
         */
        public function __construct(PDO $connection, $tableName)
        {
            $this->connection = $connection;
            $this->tableName = $tableName;
        }

        /**
         * @return string The SQL statement creating the database table required by this instance.
         */
        public function showCreateTableStatement()
        {
            return sprintf(
                <<<'EOD'
create table %s (
    %s bigint unsigned not null auto_increment,
    %s char(36) not null,
    %s blob not null,
    %s varchar(255) not null,
    %s text not null,
    %s varchar(32) not null,
    %s bigint unsigned not null,
    primary key (%2$s),
    unique key (%3$s, %8$s),
    key (%3$s)
) engine=innodb default charset=utf8;
EOD
                ,
                $this->quoteIdentifier($this->getTableName()),
                $this->quoteIdentifier($this->getAutoIncrementColumnName()),
                $this->quoteIdentifier($this->getAggregateIdColumnName()),
                $this->quoteIdentifier($this->getBinaryDataColumnName()),
                $this->quoteIdentifier($this->getEventTypeColumnName()),
                $this->quoteIdentifier($this->getJsonDataColumnName()),
                $this->quoteIdentifier($this->getTimestampColumnName()),
                $this->quoteIdentifier($this->getVersionColumnName())
            );
        }

        /**
         * Returns the (unquoted) name of the column holding the aggregate ID of an event.
         *
         * @return string The name of the column holding the aggregate ID.
         */
        protected function getAggregateIdColumnName()
        {
            return 'aggregate_id';
        }

        /**
         * Returns the (unquoted) name of the column holding an internal auto-increment value which is not related to any
         * event property.
         *
         * @return string The name of the column holding the internal serial/auto-increment value.
         */
        protected function getAutoIncrementColumnName()
        {
            return 'event_id';
        }

        /**
         * Returns the (unquoted) name of the column holding the serialized binary data of the event as generated by
         * serializeEvent() and consumed by unserializeBinaryData().
         *
         * @return string The name of the column holding the binary event data.
         */
        protected function getBinaryDataColumnName()
        {
            return 'serialized_data';
        }

        /**
         * Returns the (unquoted) name of the column holding the class name of an event object.
         *
         * @return string The name of the column holding the event's class name.
         */
        protected function getEventTypeColumnName()
        {
            return 'event_type';
        }

        /**
         * Returns the (unquoted) name of the column holding the JSON representation of an event.
         *
         * @return string The name of the column holding the JSON event data.
         */
        protected function getJsonDataColumnName()
        {
            return 'json_data';
        }

        /**
         * Returns an instance of PDO or a subclass of it, which must be connected and ready to issue SQL queries.
         *
         * @return PDO The PDO (or subclass) instance to use for queries and statements.
         */
        protected function getPdoInstance()
        {
            return $this->connection;
        }

        /**
         * Returns the (unquoted) name of the table holding the individual events. That table has at least 6 columns for
         * an internal auto-increment/serial number, the aggregate ID, version, timestamp, JSON representation and
         * binary serialization of an event object.
         *
         * @return string The name of the table holding all events.
         */
        protected function getTableName()
        {
            return $this->tableName;
        }

        /**
         * Returns the (unquoted) name of the column holding the unconverted string representation of the event's
         * timestamp.
         *
         * @return string The name of the column holding the timestamp of an event.
         */
        protected function getTimestampColumnName()
        {
            return 'iso_8601_timestamp';
        }

        /**
         * Returns the (unquoted) name of the column holding the version number of an event.
         *
         * @return string The name of the column holding the event's version number.
         */
        protected function getVersionColumnName()
        {
            return 'version_number';
        }

        /**
         * Quotes the identifier according to the syntax of the underlying SQL database and returns a string that can
         * safely be used in a query or statement.
         *
         * @param string $identifier The plain schema/table/column name to be quoted.
         * @return string The query/statement-safe quoted identifier.
         */
        protected function quoteIdentifier($identifier)
        {
            return sprintf('`%s`', str_replace('`', '``', $identifier));
        }

        /**
         * Serializes the event into a binary string to be stored in the column nominated by getBinaryDataColumnName()
         * and later to be reconstituted through unserializeBinaryData().
         *
         * @param AbstractEvent $event The event object.
         * @return string The binary representation.
         */
        protected function serializeEvent(AbstractEvent $event)
        {
            return gzcompress(serialize($event));
        }

        /**
         * Reconstitutes an event object from the binary data value stored in the column nominated by
         * getBinaryDataColumnName() where the binary data equals the result of calling serializeEvent() on that very
         * event object.
         *
         * @param string $data The binary data.
         * @return AbstractEvent The reconstituted event object.
         */
        protected function unserializeBinaryData($data)
        {
            return unserialize(gzuncompress($data));
        }
    }
