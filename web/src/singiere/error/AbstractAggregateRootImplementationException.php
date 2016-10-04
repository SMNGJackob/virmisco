<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    use LogicException;

    /**
     * A base class for exceptions thrown by an aggregate root due to an incomplete or faulty implementation.
     */
    abstract class AbstractAggregateRootImplementationException extends LogicException
    {
    }
