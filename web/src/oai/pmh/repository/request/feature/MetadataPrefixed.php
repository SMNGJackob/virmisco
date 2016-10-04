<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request\feature;

    /**
     * Restricts a request to return only records featuring the specified mandatory metadata prefix.
     */
    interface MetadataPrefixed
    {
        /**
         * @return string A required argument, which specifies that headers or records should be returned only if the
         * metadata format matching the supplied metadataPrefix is available or, depending on the repository's support
         * for deletions, has been deleted. The metadata formats supported by a repository and for a particular item can
         * be retrieved using the ListMetadataFormats request.
         */
        public function getMetadataPrefix();
    }
