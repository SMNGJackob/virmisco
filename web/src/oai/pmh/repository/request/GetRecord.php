<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request;

    use sednasoft\virmisco\oai\pmh\repository\Request;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\Identified;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\MetadataPrefixed;

    /**
     * This verb is used to retrieve an individual metadata record from a repository. Required arguments specify the
     * identifier of the item from which the record is requested and the format of the metadata that should be included
     * in the record. Depending on the level at which a repository tracks deletions, a header with a "deleted" value for
     * the status attribute may be returned, in case the metadata format specified by the metadataPrefix is no longer
     * available from the repository or from the specified item.
     */
    interface GetRecord extends Request, Identified, MetadataPrefixed
    {
    }
