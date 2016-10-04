<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use sednasoft\virmisco\oai\pmh\repository\request\ListSets as IListSets;

    /**
     * This verb is used to retrieve the set structure of a repository, useful for selective harvesting.
     */
    class ListSetsRequest extends AbstractResumableRequest implements IListSets
    {
        /**
         * @param string $requestUri
         * @param string|null $resumptionToken
         */
        public function __construct($requestUri, $resumptionToken = null)
        {
            parent::__construct(
                $requestUri,
                'ListSets',
                $resumptionToken ? ['resumptionToken' => $resumptionToken] : [],
                $resumptionToken
            );
        }
    }
