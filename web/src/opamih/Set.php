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
    use DOMElement;
    use sednasoft\virmisco\oai\pmh\repository\data\Set as ISet;

    /**
     * Represents a set (or category) a repository item may belong to, which may consist of or belong to another set,
     * forming a hierarchy.
     */
    class Set implements ISet
    {
        /** @var DOMElement[] */
        private $descriptions = [];
        /** @var string */
        private $name;
        /** @var string */
        private $setSpec;

        /**
         * @param string $setSpec
         * @param string $name
         */
        public function __construct($setSpec, $name)
        {
            $this->name = $name;
            $this->setSpec = $setSpec;
        }

        /**
         * @return string
         */
        public function __toString()
        {
            return $this->setSpec;
        }

        /**
         * @param DOMElement $rootElement
         */
        public function addDescription(DOMElement $rootElement)
        {
            $this->descriptions[] = $rootElement;
        }

        /**
         * @param DOMDocument $ownerDocument
         * @return DOMDocumentFragment
         */
        public function toDomFragment(DOMDocument $ownerDocument)
        {
            $result = $ownerDocument->createDocumentFragment();
            $result->appendChild($ownerDocument->createElement('set'));
            $result->firstChild
                ->appendChild($ownerDocument->createElement('setSpec'))
                ->appendChild($ownerDocument->createTextNode($this->setSpec));
            $result->firstChild
                ->appendChild($ownerDocument->createElement('setName'))
                ->appendChild($ownerDocument->createTextNode($this->name));
            /** @var DOMElement $description */
            foreach ($this->descriptions as $description) {
                $result->firstChild
                    ->appendChild($ownerDocument->createElement('setDescription'))
                    ->appendChild($description);
            }

            return $result;
        }
    }
