/**
 * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
 * @version 2016-09-03
 * @since 2015-11-04
 * @license CC0-1.0
 */

(function () {
    angular
        .module('backend')
        .factory('dataService', dataService);

    dataService.$inject = ['$http', '$httpParamSerializer'];
    /**
     * Data service as a common base service for specific record types.
     * @class DataService
     */
    function dataService($http, $httpParamSerializer) {
        var commandUri = '../command/';
        var queryUri = '../query/';
        return {
            arrayOfNonEmptyValues: arrayOfNonEmptyValues,
            compactDateRange: compactDateRange,
            concatIfNoneEmpty: concatIfNoneEmpty,
            queryForData: queryForData,
            sendCommand: sendCommand
        };

        /**
         * Returns an array of only those of the given strings that were not empty.
         *
         * @param {...string} [values] Any number of string values.
         * @returns {Array} An array of only the non-empty arguments.
         * @memberOf DataService#
         */
        function arrayOfNonEmptyValues() {
            var result = [];
            var i, m;
            for (i = 0, m = arguments.length; i < m; i++) {
                if (arguments[i]) {
                    result.push(arguments[i]);
                }
            }
            return result;
        }

        /**
         * Formats the date range between the given dates according to the ISO 8601 format and simplifies it.
         *
         * @param {string} dateOnOrAfter The inclusive start date.
         * @param {string} dateBefore The exclusive end date.
         * @returns {string} A (simplified) date range representation.
         * @memberOf DataService#
         */
        function compactDateRange(dateOnOrAfter, dateBefore) {
            var deltaYears, deltaMonths, deltaDays, interval, range;
            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            dateOnOrAfter = dateOnOrAfter == '' ? (new Date()).toISOString() : dateOnOrAfter;
            dateBefore = dateBefore == '' ? tomorrow.toISOString() : dateBefore;
            dateOnOrAfter = new Date(dateOnOrAfter.substr(0, 10) + 'T12:00:00Z');
            dateBefore = new Date(dateBefore.substr(0, 10) + 'T12:00:00Z');
            deltaYears = dateBefore.getFullYear() - dateOnOrAfter.getFullYear();
            deltaMonths = dateBefore.getMonth() - dateOnOrAfter.getMonth();
            deltaDays = dateBefore.getDate() - dateOnOrAfter.getDate();
            if (deltaDays < 0) {
                deltaDays += (new Date(dateBefore.getYear(), dateBefore.getMonth(), 0, 12)).getDate();
                deltaMonths--;
            }
            if (deltaMonths < 0) {
                deltaMonths += 12;
                deltaYears--;
            }
            interval = 'P' + deltaYears + 'Y' + deltaMonths + 'M' + deltaDays + 'D';
            interval = interval.replace('M0D', 'M').replace('Y0M', 'Y').replace('P0Y', 'P');
            range = dateOnOrAfter.toISOString().substr(0, 10) + '/' + interval;
            return range.replace(/-01-01\/P1Y|-01\/P1M|\/P1D/g, '')
                // suppress start/duration format in favor of start/end
                .replace(/\/P.*$/, '/' + dateBefore.toISOString().substr(0, 10));
        }

        /**
         * Returns the concatenation of the given strings but only if none of them is empty.
         *
         * @param {...string} [values] Any number of string values.
         * @returns {string} The concatenated string or the empty string.
         * @memberOf DataService#
         */
        function concatIfNoneEmpty() {
            var result = [];
            var i, m;
            for (i = 0, m = arguments.length; i < m; i++) {
                if (!arguments[i]) {
                    return '';
                }
                result.push(arguments[i]);
            }
            return result.join('');
        }

        /**
         * Loads data from the server through the query API.
         *
         * @param {string} queryPath The URI path relative to the base query URI to retrieve from.
         * @returns {Promise}
         * @memberOf DataService#
         */
        function queryForData(queryPath) {
            return $http.get(queryUri + queryPath).then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    throw response.statusText + '\n' + response.data;
                }
            );
        }

        /**
         * Send a command to the server using its command API.
         *
         * @param {string} command The name of command to send.
         * @param {object} data The data.
         * @returns {Promise}
         * @memberOf DataService#
         */
        function sendCommand(command, data) {
            return $http.post(
                commandUri + command + '/',
                $httpParamSerializer(data),
                {headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}}
            ).then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    throw response.statusText + '\n' + response.data;
                }
            );
        }
    }
})();
