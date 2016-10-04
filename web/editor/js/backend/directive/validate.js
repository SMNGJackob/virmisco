/**
 * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
 * @version 2015-11-02
 * @since 2015-10-31
 * @license CC0-1.0
 */

(function () {
    angular
        .module('backend')
        .directive('validate', function (){
            return {
                require: 'ngModel',
                restrict: 'A',
                link: function(scope, elem, attributes, ngModel) {
                    var validatorFunction = scope;
                    angular.forEach(attributes.validate.split('.'), function(name) {
                        validatorFunction = validatorFunction[name];
                    });

                    //For DOM -> model validation
                    ngModel.$parsers.unshift(function(value) {
                        var valid = validatorFunction(value);
                        ngModel.$setValidity('validate', valid);
                        return valid ? value : undefined;
                    });

                    //For model -> DOM validation
                    //deactivated, caused errors
                    //ngModel.$formatters.unshift(function(value) {
                    //    ngModel.$setValidity(validatorFunction(value));
                    //    return value;
                    //});
                }
            };
        });
})();
