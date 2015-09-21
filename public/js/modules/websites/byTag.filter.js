/**
 * notos.websites
 * FILTER: TagFilter
 */
(function () {
    'use strict';

    angular
        .module('notos.websites')
        .filter('ByTag', ByTag);

    /**
     *
     */
    function ByTag(_) {
        return function (websites, tags) {
            var filtered = [];
            angular.forEach(websites, function (website) {
                angular.forEach(website.tags, function (tag) {
                    if (_.some(tags, function(t) { return t.id === tag.id; })) {
                        if (filtered.indexOf(website) === -1) {
                            filtered.push(website);
                        }
                    }
                });
            });
            return filtered;
        }
    }
})();