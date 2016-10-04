<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use DateTimeInterface;
    use sednasoft\virmisco\oai\pmh\repository\request\ListIdentifiers as IListIdentifiers;

    /**
     * This verb is an abbreviated form of ListRecords, retrieving only headers rather than records. Optional arguments
     * permit selective harvesting of headers based on set membership and/or datestamp. Depending on the repository's
     * support for deletions, a returned header may have a status attribute of "deleted" if a record matching the
     * arguments specified in the request has been deleted.
     */
    class ListIdentifiersRequest extends AbstractListItemsRequest implements IListIdentifiers
    {
        /**
         * @param string $requestUri
         * @param string|null $resumptionToken
         * @param string|null $metadataPrefix
         * @param string|null $setSpec
         * @param DateTimeInterface $from
         * @param DateTimeInterface $until
         */
        public function __construct(
            $requestUri,
            $resumptionToken,
            $metadataPrefix,
            $setSpec = null,
            DateTimeInterface $from = null,
            DateTimeInterface $until = null
        ) {
            parent::__construct(
                $requestUri,
                'ListIdentifiers',
                $resumptionToken,
                $metadataPrefix,
                $setSpec,
                $from,
                $until
            );
        }
    }
