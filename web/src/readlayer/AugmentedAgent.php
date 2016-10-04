<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-08-24 (date of last modification)
     * @since 2015-08-24 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\readlayer;

    use sednasoft\virmisco\readlayer\valueobject\GatheringAgent;

    class AugmentedAgent extends GatheringAgent
    {
        /**
         * @return string
         */
        public function __toString()
        {
            return implode(', ', array_merge(
                $this->getPerson() ? [$this->getPerson()] : [],
                $this->getOrganization() ? [$this->getOrganization()] : []
            ));
        }
    }
