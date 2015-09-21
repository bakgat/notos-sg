/**
 * notos.tags
 * FACTORY: Tag
 */

(function () {
    'use strict';

    angular
        .module('notos.tags')
        .factory('Tag', Tag);

    /* @ngInject */
    function Tag(HTTPCache) {
        var service = HTTPCache.service('tags');

        return service;

    }
})();