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
            getList: getList,
            suggest: suggest
        };

        return service;
        ///////////////////

        function getList() {
            return HTTPCache.service('websites').getList();
        }

        function full() {
            return HTTPCache.service('websites').one('full').getList();
        }

        function suggest(data) {
            return HTTPCache.one('websites').post('suggest', {data: data});
        }
    }
})();