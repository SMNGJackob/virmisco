<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-15 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\oai\pmh\repository;

    /**
     * A message sent to the client as a reaction to a client's request.
     */
    interface Response
    {
        /** The finest harvesting granularity supported by the repository is a day. */
        const HG_DAY = 'YYYY-MM-DD';
        /** The finest harvesting granularity supported by the repository is a second. */
        const HG_SECOND = 'YYYY-MM-DDThh:mm:ssZ';
    }
