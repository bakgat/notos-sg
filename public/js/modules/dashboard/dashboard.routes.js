/**
 * ROUTES: notos.dashboard
 */
(function () {
    'use strict';

    angular
        .module('notos.dashboard')
        .run(configRoutes);

    /* @ngInject */
    function configRoutes(routehelper) {
        routehelper.configureStates(getStates());
    };

    function getStates() {
        return [
            {
                state: 'index',
                config: {
                    abstract: true,
                    url: '/index',
                    views: {
                        'main@': {
                            templateUrl: 'js/modules/layout/main.html'
                        }
                    },
                    title: 'start'
                }
            },
            {
                state: 'index.dashboard',
                config: {
                    url: '/dashboard',
                    views: {
                        'content@index': {
                            templateUrl: 'js/modules/dashboard/dashboard.html',
                            controller: 'DashboardController',
                            controllerAs: 'vm'
                        }
                    },
                    title: 'Dashboard'
                }
            }
        ];
    };
})();