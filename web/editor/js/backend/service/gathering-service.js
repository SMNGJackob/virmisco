/**
 * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
 * @version 2016-12-06
 * @since 2015-11-02
 * @license CC0-1.0
 */

(function () {
    angular
        .module('backend')
        .factory('gatheringService', gatheringService);

    gatheringService.$inject = ['dataService', '$filter'];
    /**
     * Data service for gatherings.
     *
     * @param {DataService} dataService
     * @param $filter
     * @class GatheringService
     */
    function gatheringService(dataService, $filter) {
        return {
            loadGatheringList: loadGatheringList,
            loadGatheringRecord: loadGatheringRecord,
            logGathering: logGathering,
            manipulateGathering: manipulateGathering
        };
        /**
         * Loads the list of gatherings from the server.
         * @returns {Promise} A promise whose value is a list of gathering records with properties as defined in
         * /web/query/gathering-list.sql
         * @memberOf GatheringService#
         */
        function loadGatheringList() {
            return dataService.queryForData('gathering/').then(function (gatheringList) {
                var i, m;
                for (i = 0, m = gatheringList.length; i < m; i++) {
                    gatheringList[i].dateAfter = $filter('limitTo')(gatheringList[i].dateAfter, 10, 0);
                    gatheringList[i].dateBefore = $filter('limitTo')(gatheringList[i].dateBefore, 10, 0);
                    gatheringList[i].location = dataService.arrayOfNonEmptyValues(
                        gatheringList[i].place,
                        gatheringList[i].region,
                        gatheringList[i].province,
                        gatheringList[i].country
                    ).join(', ');
                    gatheringList[i].agent = dataService.arrayOfNonEmptyValues(
                        gatheringList[i].person,
                        dataService.concatIfNoneEmpty('(', gatheringList[i].organization, ')')
                    ).join(', ');
                    gatheringList[i].date = dataService.compactDateRange(
                        gatheringList[i].dateAfter,
                        gatheringList[i].dateBefore
                    );
                }
                return gatheringList;
            });
        }

        /**
         * Loads the specified gathering from the server.
         * @param {string} uuid A lowercase 32-bit UUID, e. g. a1b2c3d4-e5f6-4a7b-8c9d-0e1f2a3b4c5d.
         * @returns {Promise} A promise whose value is a gathering record with properties as defined in
         * /web/query/gathering-record.sql
         * @memberOf GatheringService#
         */
        function loadGatheringRecord(uuid) {
            return dataService.queryForData('gathering/' + uuid).then(function (gathering) {
                gathering.dateAfter = $filter('limitTo')(gathering.dateAfter, 10, 0);
                gathering.dateBefore = $filter('limitTo')(gathering.dateBefore, 10, 0);
                return gathering;
            });
        }

        /**
         * @param {string} id
         * @param {string} journalNumber
         * @param {string} samplingDateAfter
         * @param {string} samplingDateBefore
         * @param {string} agentPerson
         * @param {string} agentOrganization
         * @param {string} locationCountry
         * @param {string} locationProvince
         * @param {string} locationRegion
         * @param {string} locationPlace
         * @param {string} remarks
         * @returns {Promise}
         * @throws {} when any of the date arguments are invalid
         * @memberOf GatheringService#
         */
        function logGathering(id, journalNumber, samplingDateAfter, samplingDateBefore, agentPerson, agentOrganization, locationCountry, locationProvince, locationRegion, locationPlace, remarks) {
            samplingDateAfter = parseIsoDateString(samplingDateAfter);
            samplingDateBefore = parseIsoDateString(samplingDateBefore);
            return dataService.sendCommand('LogGathering', {
                gatheringId: id,
                journalNumber: journalNumber,
                samplingDateAfter: samplingDateAfter ? samplingDateAfter.toISOString() : null,
                samplingDateBefore: samplingDateBefore ? samplingDateBefore.toISOString() : null,
                agentPerson: agentPerson,
                agentOrganization: agentOrganization,
                locationCountry: locationCountry,
                locationProvince: locationProvince,
                locationRegion: locationRegion,
                locationPlace: locationPlace,
                remarks: remarks
            });
        }

        /**
         * @param {string} id
         * @param {string} journalNumber
         * @param {string} dateAfter
         * @param {string} dateBefore
         * @param {string} person
         * @param {string} organization
         * @param {string} country
         * @param {string} province
         * @param {string} region
         * @param {string} place
         * @param {string} remarks
         * @returns {Promise}
         * @throws {*} when any of the date arguments are invalid
         * @memberOf GatheringService#
         */
        function manipulateGathering(id, journalNumber, dateAfter, dateBefore, person, organization, country, province, region, place, remarks) {
            dateAfter = parseIsoDateString(dateAfter);
            dateBefore = parseIsoDateString(dateBefore);
            return dataService.sendCommand('ManipulateGathering', {
                gatheringId: id,
                journalNumber: journalNumber,
                samplingDateAfter: dateAfter ? dateAfter.toISOString() : null,
                samplingDateBefore: dateBefore ? dateBefore.toISOString() : null,
                agentPerson: person,
                agentOrganization: organization,
                locationCountry: country,
                locationProvince: province,
                locationRegion: region,
                locationPlace: place,
                remarks: remarks
            });
        }

        // helper functions (not exposed on service)

        /**
         * @param {string} dateString
         * @returns {Date|null}
         * @throws {string} when the give string does not form a valid ISO 8601 date (YYYY-MM-DD).
         */
        function parseIsoDateString(dateString) {
            var matchResult;
            if (dateString == '') {
                return null;
            }
            // detect yyyy-mm-dd
            matchResult = dateString.match(/^(\d{4})-(\d\d)-(\d\d)$/);
            if (matchResult) {
                return new Date(matchResult[1] - 0, matchResult[2] - 1, matchResult[3] - 0);
            }
            // detect d.m.yyyy
            matchResult = dateString.match(/^(\d\d?)\.(\d\d?)\.(\d{4})$/);
            if (matchResult) {
                return new Date(matchResult[3] - 0, matchResult[2] - 1, matchResult[1] - 0);
            }
            // detect m/d/yyyy
            matchResult = dateString.match(/^(\d\d?)\/(\d\d?)\/(\d{4})$/);
            if (matchResult) {
                return new Date(matchResult[3] - 0, matchResult[1] - 1, matchResult[2] - 0);
            }
            throw 'The given string does not conform to a supported date format.'
        }
    }
})();
