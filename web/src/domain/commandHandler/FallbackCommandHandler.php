<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-27 (date of last modification)
     * @since 2015-07-27 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\domain\commandHandler;

    use Exception;
    use sednasoft\virmisco\domain\AbstractCommandHandler;
    use sednasoft\virmisco\domain\error\CommandNotHandledException;
    use sednasoft\virmisco\singiere\AbstractCommand;

    class FallbackCommandHandler extends AbstractCommandHandler
    {
        /**
         * Executes the command by loading the required aggregate from the repository and calling methods on the
         * aggregate. In case of exceptions they should be let bubble up. After the modifying method calls, the
         * repository should be instructed to save the aggregate.
         *
         * @param AbstractCommand $command
         * @throws Exception
         */
        public function execute(AbstractCommand $command)
        {
            throw new CommandNotHandledException(get_class($command));
        }
    }
