<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-19 (date of last modification)
     * @since 2015-07-05 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain;

    /**
     * Something that can be converted into a human-readable string with markdown formatting.
     */
    interface IHtmlReadable
    {
        /**
         * @return string
         */
        public function toHtml();
    }
