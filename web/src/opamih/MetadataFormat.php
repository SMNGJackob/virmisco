<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use DOMDocument;
    use DOMDocumentFragment;
    use sednasoft\virmisco\oai\pmh\repository\data\MetadataFormat as IMetadataFormat;

    /**
     * Represents an XML format for serializing an item's metadata, e. g. Dublin Core, RDF-XML.
     */
    class MetadataFormat implements IMetadataFormat
    {
        /** @var string */
        private $namespace;
        /** @var string */
        private $prefix;
        /** @var string */
        private $schema;

        /**
         * @param string $prefix
         * @param string $schema
         * @param string $namespace
         */
        public function __construct($prefix, $schema, $namespace)
        {
            $this->prefix = $prefix;
            $this->schema = $schema;
            $this->namespace = $namespace;
        }

        /**
         * @return string
         */
        public function __toString()
        {
            return $this->prefix;
        }

        /**
         * @param DOMDocument $ownerDocument
         * @return DOMDocumentFragment
         */
        public function toDomFragment(DOMDocument $ownerDocument)
        {
            $result = $ownerDocument->createDocumentFragment();
            $result->appendChild($ownerDocument->createElement('metadataFormat'));
            $result->firstChild
                ->appendChild($ownerDocument->createElement('metadataPrefix'))
                ->appendChild($ownerDocument->createTextNode($this->prefix));
            $result->firstChild
                ->appendChild($ownerDocument->createElement('schema'))
                ->appendChild($ownerDocument->createTextNode($this->schema));
            $result->firstChild
                ->appendChild($ownerDocument->createElement('metadataNamespace'))
                ->appendChild($ownerDocument->createTextNode($this->namespace));

            return $result;
        }
    }
