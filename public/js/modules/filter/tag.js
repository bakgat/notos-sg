/**
 * notos.filter
 * FACTORY: Tag
 */

(function () {
    'use strict';

    angular
        .module('notos.filter')
        .factory('Tag', Tag);

    /* @ngInject */
    function Tag(HTTPCache) {
        var service = HTTPCache.service('tags');

        return service;
    }
})();