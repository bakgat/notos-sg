/**
 * notos.websites
 * FACTORY: Website
 */

(function () {
    'use strict';

    angular
        .module('notos.websites')
        .factory('Website', Website);

    /* @ngInject */
    function Website(HTTPCache) {

        var service = {
            full: full,
            getList: getList
        };

        return service;
        ///////////////////

        function getList() {
            return HTTPCache.service('websites').getList();
        }

        function full() {
            return HTTPCache.service('websites').one('full').getList();
        }
    }
})();