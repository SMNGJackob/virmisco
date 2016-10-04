<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-06-17 (date of last modification)
     * @since 2015-06-16 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\opamih;

    use sednasoft\virmisco\oai\pmh\repository\data\Record as IRecord;
    use sednasoft\virmisco\oai\pmh\repository\Request as IRequest;
    use sednasoft\virmisco\oai\pmh\repository\response\GetRecord as IGetRecord;

    /**
     * A successful response to a GetRecord request.
     */
    class GetRecordResponse extends AbstractResponse implements IGetRecord
    {
        /**
         * @param IRequest $request
         * @param string $dateGranularity One of the Response::HG_* constants.
         */
        public function __construct(IRequest $request, $dateGranularity)
        {
            parent::__construct($request, 'GetRecord', $dateGranularity);
        }

        /**
         * @param IRecord $record Metadata about a resource expressed in a single format.
         */
        public function setRecord(IRecord $record)
        {
            $this->getContainer()->appendChild($record->toDomFragment($this->getDocument()));
        }
    }
