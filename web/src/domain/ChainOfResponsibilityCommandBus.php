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

    /**
     * Serves as a command bus that only passes commands to its only handler which acts as the head of a chain of
     * responsibility.
     */
    class ChainOfResponsibilityCommandBus implements ICommandBus
    {
        /** @var AbstractChainedCommandHandler */
        private $headOfChain;

        /**
         * Creates an instance and initializes all components.
         * @param AbstractChainedCommandHandler $headOfChain
         */
        public function __construct(AbstractChainedCommandHandler $headOfChain)
        {
            $this->headOfChain = $headOfChain;
        }

        /**
         * @param AbstractCommand $command
         * @throws Exception
         */
        public function dispatch(AbstractCommand $command)
        {
            $this->headOfChain->execute($command);
        }
    }
