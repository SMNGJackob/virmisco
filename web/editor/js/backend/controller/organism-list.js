/**
 * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
 * @version 2015-11-02
 * @since 2015-10-12
 * @license CC0-1.0
 */

(function () {
    angular
        .module('backend')
        .controller('OrganismListController', OrganismListController);

    OrganismListController.$inject = ['preloadedOrganismList'];
    function OrganismListController(preloadedOrganismList) {
        var vm = this;
        vm.filter = {};
        vm.organisms = preloadedOrganismList;
        vm.sort = 'date';
        vm.desc = true;
        vm.sortBy = sortBy;

        function sortBy(field) {
            vm.desc = field === vm.sort ? !vm.desc : false;
            vm.sort = field;
        }
    }
})();
