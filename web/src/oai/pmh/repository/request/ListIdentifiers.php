<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-15 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request;

    use sednasoft\virmisco\oai\pmh\repository\Request;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\Classifiable;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\MetadataPrefixed;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\Resumable;
    use sednasoft\virmisco\oai\pmh\repository\request\feature\Temporal;

    /**
     * This verb is an abbreviated form of ListRecords, retrieving only headers rather than records. Optional arguments
     * permit selective harvesting of headers based on set membership and/or datestamp. Depending on the repository's
     * support for deletions, a returned header may have a status attribute of "deleted" if a record matching the
     * arguments specified in the request has been deleted.
     */
    interface ListIdentifiers extends Request, Classifiable, MetadataPrefixed, Resumable, Temporal
    {
    }
