<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request;

    use sednasoft\virmisco\oai\pmh\repository\Request;

    /**
     * This verb is used to retrieve information about a repository. Some of the information returned is required as
     * part of the OAI-PMH. Repositories may also employ the Identify verb to return additional descriptive information.
     */
    interface Identify extends Request
    {
    }
