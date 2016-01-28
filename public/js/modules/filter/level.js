/**
 * notos.filter
 * FACTORY: Level
 */

(function () {
    'use strict';

    angular
        .module('notos.filter')
        .factory('Level', Level);

    /* @ngInject */
    function Level(HTTPCache) {
        var service = HTTPCache.service('group').one('levels');

        return service;
    }
})();