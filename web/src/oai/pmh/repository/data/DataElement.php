<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\data;

    use DOMDocument;
    use DOMDocumentFragment;

    /**
     * Represents any data element that needs to be serializable to XML for being sent in a response.
     */
    interface DataElement
    {
        /**
         * @return string
         */
        public function __toString();

        /**
         * @param DOMDocument $ownerDocument
         * @return DOMDocumentFragment
         */
        public function toDomFragment(DOMDocument $ownerDocument);
    }
