<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    /**
     * Thrown when an aggregate lacks a protected method to apply a certain event. The method must be named "apply"
     * followed by the unqualified class name of the event class.
     */
    class MissingApplyMethodForEventException extends AbstractAggregateRootImplementationException
    {
    }
