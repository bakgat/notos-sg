(function () {
    'use strict';

    angular
        .module('notos', [
            //shared modules
            'notos.core',
            'notos.layout',
            'notos.data',
            'notos.widgets',

            //app modules
            'notos.dashboard',
            'notos.websites'
        ]);
})();