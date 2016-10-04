<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use sednasoft\virmisco\oai\pmh\repository\request\feature\Resumable as IResumable;

    /**
     * A request from a client, received over HTTP with a certain verb parameter that specifies one of six predefined
     * queries.
     */
    abstract class AbstractResumableRequest extends AbstractRequest implements IResumable
    {
        /** @var string|null */
        private $resumptionToken;

        /**
         * @param string $requestUri
         * @param string $verb
         * @param array $parameters
         * @param string|null $resumptionToken
         */
        public function __construct($requestUri, $verb, array $parameters, $resumptionToken = null)
        {
            parent::__construct($requestUri, $verb, $parameters);
            $this->resumptionToken = $resumptionToken;
        }

        /**
         * @return string|null An exclusive argument with a value that is the flow control token returned by a previous
         * ListIdentifiers request that issued an incomplete list.
         */
        public function getResumptionToken()
        {
            return $this->resumptionToken;
        }

        /**
         * @return bool Whether the optional but exclusive resumptionToken argument is present, in which case none of
         * the other arguments are allowed.
         */
        public function hasResumptionToken()
        {
            return $this->getResumptionToken() !== null;
        }
    }
