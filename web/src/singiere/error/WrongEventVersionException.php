<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    /**
     * Thrown when attempting to apply an event whose version is not one more than the current version of the aggregate.
     * This usually indicates that an aggregate created multiple events using nextVersion() without applying them
     * immediately.
     */
    class WrongEventVersionException extends AbstractAggregateRootImplementationException
    {
    }
