<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-26 (date of last modification)
     * @since 2015-08-26 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\vpmh;

    use Traversable;

    /**
     * Retrieves Set objects and related information.
     */
    interface ISetProvider
    {
        /**
         * @return int
         */
        public function countSets();

        /**
         * @param string $setSpec
         * @return int|null
         */
        public function indexOfSet($setSpec);

        /**
         * @param int $index
         * @param int $length
         * @return Traversable Each member is an instance of Set.
         */
        public function iterateSetsInRange($index, $length);
    }
