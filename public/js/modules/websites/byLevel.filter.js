/**
 * notos.websites
 * FILTER: ByLevel
 */
(function () {
    'use strict';

    angular
        .module('notos.websites')
        .filter('ByLevel', ByLevel);

    /**
     *
     */
    function ByLevel(_) {
        return function (websites, levels) {
            var filtered = [];
            angular.forEach(websites, function (website) {
                angular.forEach(website.objectives, function (objective) {
                    angular.forEach(objective.levels, function(level) {
                        if (_.some(levels, function(l) { return level.group && l.id === level.group.id; })) {
                            if (level.level > 0 && filtered.indexOf(website) === -1) {
                                filtered.push(website);
                            }
                        }
                    });

                });
            });
            return filtered;
        }
    }
})();