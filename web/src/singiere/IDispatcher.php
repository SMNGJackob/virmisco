<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-07-03 (date of last modification)
     * @since 2015-07-03 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\singiere;
    use Exception;
    use Generator;

    /**
     * A dispatcher receiving a command and calling the appropriate method on the designated aggregate.
     */
    interface IDispatcher {

        /**
         * Handles a command yielding all generated events or throwing an exception.
         *
         * @param AbstractCommand $command The command to handle.
         * @return Generator An AbstractEvent for every event generated during command processing.
         * @throws Exception
         */
        public function dispatch(AbstractCommand $command);
    }
