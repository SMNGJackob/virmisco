<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-27 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\vpmh;

    use InvalidArgumentException;
    use sednasoft\virmisco\oai\pmh\repository\Response;
    use sednasoft\virmisco\opamih\AbstractHandler;
    use sednasoft\virmisco\opamih\ErrorResponse;
    use sednasoft\virmisco\opamih\RequestGateway;

    /**
     * The front controller providing a static method to handle the request.
     */
    class OaiPmhFrontController
    {
        /**
         * @param AbstractHandler $handler The head element of the chain of responsibility that is supposed to handle
         * the request.
         * @param string $harvestingGranularity One of the Response::HG_* constants.
         */
        public static function processRequestFromSapi(
            AbstractHandler $handler,
            $harvestingGranularity = Response::HG_DAY
        ) {
            header('Content-Type: text/plain; charset=UTF-8');
            $gateway = new RequestGateway();
            $response = null;
            try {
                $request = $gateway->loadRequestFromSuperglobals($_GET, $_POST, $_SERVER);
                $response = $handler->handle($request, $harvestingGranularity);
            } catch (InvalidArgumentException $e) {
                $response = new ErrorResponse($gateway->getLastValidRequestUri(), $gateway->getLastValidVerb());
                switch ($e->getCode()) {
                    case RequestGateway::ERR_BAD_VERB:
                        $response->setError(ErrorResponse::ERR_BAD_VERB, $e->getMessage());
                        break;
                    case RequestGateway::ERR_BAD_ARGUMENT:
                        $response->setError(ErrorResponse::ERR_BAD_ARGUMENT, $e->getMessage());
                        break;
                    default:
                        $response->setError(
                            ErrorResponse::ERR_BAD_ARGUMENT,
                            sprintf('Unexpected %s: %s', get_class($e), $e->getMessage())
                        );
                }
            }
            if (!$response) {
                $response = new ErrorResponse($gateway->getLastValidRequestUri(), $gateway->getLastValidVerb());
                $response->setError(
                    ErrorResponse::ERR_BAD_ARGUMENT,
                    'Unexpected empty response without any regular error'
                );
            }
            $document = $response->getDocument();
//            $document->insertBefore(
//                $document->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="transform.xsl"'),
//                $document->documentElement
//            );
            header('Content-Type: application/xml; charset=UTF-8');
            echo $document->saveXML();
        }
    }
