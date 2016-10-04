<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    use Exception;

    /**
     * Thrown when an event is expected but something else is provided. This can happen especially with generic
     * iterators representing an event stream.
     */
    class NotAnEventException extends Exception
    {
    }
