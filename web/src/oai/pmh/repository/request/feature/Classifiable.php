<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository\request\feature;

    /**
     * Enables selective harvesting for a request based on an optional hierarchical set identifier.
     */
    interface Classifiable
    {
        /**
         * @return string|null An optional argument with a setSpec value, which specifies set criteria for selective
         * harvesting.
         */
        public function getSet();

        /**
         * @return bool Whether the optional set argument is present.
         */
        public function hasSet();
    }
