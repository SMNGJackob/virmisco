<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request;

    use sednasoft\virmisco\oai\pmh\repository\Request;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\Resumable;

    /**
     * This verb is used to retrieve the set structure of a repository, useful for selective harvesting.
     */
    interface ListSets extends Request, Resumable
    {
    }
