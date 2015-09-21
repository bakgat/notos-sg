/* global toastr:false, moment:false */
(function() {
    'use strict';

    angular
        .module('notos.core')
        .constant('toastr', toastr)
        .constant('moment', moment)
        .constant('_', window._);
})();