/**
 * notos.widgets
 * FILTER: offset
 */
(function () {
    'use strict';

    angular
        .module('notos.widgets')
        .filter('offset', filter);


    function filter() {
        return function offset(input, start) {
            if (input) {
                start = parseInt(start, 10);
                return input.slice(start);
            }
            return [];
        };
    }
})();