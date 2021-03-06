/**
 * notos.dashboard
 * CONTROLLER: DashboardController
 */
(function () {
    'use strict';

    angular
        .module('notos.dashboard')
        .controller('DashboardController', DashboardController);

    /* @ngInject */
    function DashboardController($scope, Tag, Website, Level,
                                 SearchWebsiteFilter, $filter) {
        /*jshint validthis: true */
        var rnd = -1;
        var vm = this;

        vm.websites = [];
        vm.filtered = [];
        vm.tags = [];
        vm.levels = [];


        vm.filter = {
            levels: [],
            tags: [],
            terms: ''
        }

        vm.addLevelFilter = addLevelFilter;
        vm.removeLevelFilter = removeLevelFilter;
        vm.addTagFilter = addTagFilter;
        vm.removeTagFilter = removeTagFilter;

        vm.randomSite = null;
        vm.tagLimit = 3;
        vm.levelLimit = 3;
        vm.levelCollapsed = true;
        vm.tagCollapsed = true;

        vm.filterFlag = false;

        vm.itemsPerPage = 10;
        vm.currentPage = 1;
        vm.totalItems = 0;

        vm.pageChanged = pageChanged;

        vm.idea = {url: null, description: null};
        vm.submitIdea = false;
        vm.acceptedIdea = false;

        vm.sendIdea = sendIdea;

        activate();
        ///////////

        function activate() {
            vm.loadingMain = true;
            vm.loadingLevels = true;
            vm.loadingTags = true;

            getTags();
            getLevels();
            getWebsites().then(function () {
                setFilterFlag();
            });


        }

        function getTags() {
            return Tag.getList().then(tagsCompleted);

            function tagsCompleted(response) {
                vm.tags = response;
                vm.loadingTags = false;
                return vm.tags;
            }
        }

        function getLevels() {
            return Level.getList().then(levelCompleted);

            function levelCompleted(response) {
                vm.levels = response;
                vm.loadingLevels = false;
                return vm.levels;
            }
        }

        function getWebsites() {
            return Website.full().then(websitesCompleted);

            function websitesCompleted(response) {
                vm.websites = $filter('orderBy')(response, 'id', true);
                ;


                vm.loadingMain = false;
                return vm.websites;
            }
        }


        function addLevelFilter(level) {
            vm.filter.levels.push(level);
            var index = vm.levels.indexOf(level);
            vm.levels.splice(index, 1);
        }

        function removeLevelFilter(level) {
            vm.levels.push(level);

            var index = vm.filter.levels.indexOf(level);
            vm.filter.levels.splice(index, 1);
        }

        function addTagFilter(tag) {
            vm.filter.tags.push(tag);
            var index = vm.tags.indexOf(tag);
            vm.tags.splice(index, 1);
        }

        function removeTagFilter(tag) {
            vm.tags.push(tag);

            var index = vm.filter.tags.indexOf(tag);
            vm.filter.tags.splice(index, 1);
        }

        $scope.$watch('vm.filter', function (tags) {
            if (vm.websites.length) {
                vm.filtered = SearchWebsiteFilter(vm.websites, vm.filter);
            }
            setFilterFlag();
        }, true);

        $scope.$watchGroup(['vm.currentPage', 'vm.totalItems', 'vm.itemsPerPage'], function () {
            setPaginationText();
        });


        function setFilterFlag() {
            vm.filterFlag = vm.filter.levels.length ||
                vm.filter.tags.length ||
                vm.filter.terms;

            if (!vm.filterFlag) {
                vm.filtered = vm.websites;
            }
            vm.totalItems = vm.filtered.length;

            setPaginationText();
        }

        function setPaginationText() {
            var total = vm.filtered.length;
            var floor = ((vm.currentPage - 1) * vm.itemsPerPage) + 1;
            var ceil = floor + (vm.itemsPerPage - 1);
            if (ceil > total) {
                ceil = total;
            }

            if (total > 0 && total > vm.itemsPerPage) {
                vm.paginationText = 'Toont ' + floor +
                    (total > 1 ? ' - ' + ' ' + ceil : '') +
                    ' (van ' + total + ' websites)';
            } else {
                vm.paginationText = '';
            }
        }

        $scope.$watch('vm.websites', function () {
            if (vm.websites.length) {
                setRandomSite();
            }
        });
        function setRandomSite() {
            while (!vm.randomSite || !vm.randomSite.image) {
                rnd = Math.floor((Math.random() * vm.websites.length));
                vm.randomSite = vm.websites[rnd];
            }
            return vm.randomSite;
        }

        function pageChanged() {
            angular.element('html, body').animate({scrollTop: 0}, 500);
        }

        function sendIdea() {
            Website.suggest(vm.idea);

            vm.submitIdea = false;
            vm.acceptedIdea = true;
        }
    }
})();