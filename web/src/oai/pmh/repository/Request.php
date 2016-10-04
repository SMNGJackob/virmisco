<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-16 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository;

    use Traversable;

    /**
     * A request from a client, received over HTTP with a certain verb parameter that specifies one of six predefined
     * queries.
     */
    interface Request
    {
        /**
         * @return Traversable A traversable yielding key-value-pairs of other parameters (apart from verb).
         */
        public function getParameters();

        /**
         * @return string The request URI.
         */
        public function getRequestUri();

        /**
         * @return string The request verb.
         */
        public function getVerb();
    }
