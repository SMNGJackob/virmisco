<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-10-18 (date of last modification)
     * @since 2015-10-18 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere\error;

    /**
     * Thrown when trying to load an aggregate of a certain class with an existing ID from another incompatible class.
     */
    class AggregateMismatchException extends AbstractRepositoryException
    {
    }
