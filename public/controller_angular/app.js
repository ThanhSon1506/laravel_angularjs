var myApp = angular.module('myApp', ['ngRoute', 'ngCookies', 'ui.grid',
    'ui.grid.edit', 'ui.grid.pagination']);

myApp.config(['$routeProvider', '$locationProvider',
    function ($routeProvider, $locationProvider) {
        $routeProvider.when('/home', {
            templateUrl: 'home',//view
            controller: 'userController'//controller
        });
        $routeProvider.when('/', {
            templateUrl: 'login',
            controller: 'userController'
        });
        $routeProvider.when('/logout', {
            templateUrl: 'logout',
            controller: 'userController'
        });
        $routeProvider.when('/tin-tuc', {
            templateUrl: 'tin-tuc',
            controller: 'newsController'
        });
        $routeProvider.otherwise('/');
    }
]);