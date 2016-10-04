<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use sednasoft\virmisco\oai\pmh\repository\Request as IRequest;
    use sednasoft\virmisco\oai\pmh\repository\Response as IResponse;


    /**
     * Represents a chain of responsibility to handle requests by passing it along the chain of concrete subclasses
     * until one of them returns a response instead of null.
     */
    abstract class AbstractHandler
    {
        /** @var AbstractHandler|null */
        private $nextHandler;

        /**
         * @param AbstractHandler|null $nextHandler The next handler to receive requests unhandled by the current
         * instance.
         */
        public function __construct(self $nextHandler = null)
        {
            $this->nextHandler = $nextHandler;
        }

        /**
         * @param IRequest $request The request to handle.
         * @param string $dateGranularity One of the Response::HG_* constants.
         * @return IResponse|null The response created from handling the request or null if none of the handlers was able
         * to.
         */
        public function handle(IRequest $request, $dateGranularity)
        {
            $response = $this->handleRequest($request, $dateGranularity);
            if ($response) {
                return $response;
            }

            return $this->nextHandler ? $this->nextHandler->handle($request, $dateGranularity) : null;
        }

        /**
         * @param IRequest $request The current request to handle if possible.
         * @param string $dateGranularity One of the Response::HG_* constants.
         * @return IResponse|null A response object, when the request could be handled, null to pass the request on to
         * the next handler.
         */
        protected abstract function handleRequest(IRequest $request, $dateGranularity);
    }
