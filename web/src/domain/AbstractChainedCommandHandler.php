<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-27 (date of last modification)
     * @since 2015-07-27 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain;

    use Exception;
    use sednasoft\virmisco\singiere\AbstractCommand;
    use sednasoft\virmisco\singiere\IRepository;

    abstract class AbstractChainedCommandHandler extends AbstractCommandHandler
    {
        /** @var AbstractCommandHandler */
        private $nextHandler;

        /**
         * @param IRepository $repository
         * @param AbstractCommandHandler $nextHandler
         */
        public function __construct(IRepository $repository, AbstractCommandHandler $nextHandler)
        {
            parent::__construct($repository);
            $this->nextHandler = $nextHandler;
        }

        /**
         * Hands the command over to the configured next handler when this instance can't handle the command itself.
         *
         * @param AbstractCommand $command
         * @throws Exception
         */
        protected function dispatchToNextHandler(AbstractCommand $command)
        {
            $this->nextHandler->execute($command);
        }
    }
