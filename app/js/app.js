'use strict';

// Declare app level module which depends on filters, and services
angular.module('wlhssbApp', [
  'ngRoute',
  'wlhssbApp.filters',
  'wlhssbApp.services',
  'wlhssbApp.directives',
  'wlhssbApp.controllers',
  'ui.bootstrap'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {templateUrl: 'partials/home.html', controller: 'MyCtrl1'});
  $routeProvider.when('/schedule', {templateUrl: 'partials/schedule.html', controller: 'GameController'});
  $routeProvider.when('/calendar', {templateUrl: 'partials/calendar.html', controller: 'MyCtrl1'});
  $routeProvider.when('/roster', {templateUrl: 'partials/roster.html', controller: 'RosterController'});
  $routeProvider.when('/news', {templateUrl: 'partials/news.html', controller: 'MyCtrl1'});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
