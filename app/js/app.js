'use strict';

// Declare app level module which depends on filters, and services
angular.module('wlhssbApp', [
  'ngRoute',
  'wlhssbApp.filters',
  'wlhssbApp.services',
  'wlhssbApp.directives',
  'wlhssbApp.controllers',
  'ui.bootstrap',
  'ui.calendar'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {templateUrl: 'partials/home.html', controller: 'MyCtrl1'});
  $routeProvider.when('/calendar', {templateUrl: 'partials/calendar.html', controller: 'CalendarController'});
  $routeProvider.when('/news', {templateUrl: 'partials/news.html', controller: 'MyCtrl1'});
  $routeProvider.when('/philosophy', {templateUrl: 'partials/philosophy.html', controller: 'MyCtrl1'});
  $routeProvider.when('/media', {templateUrl: 'partials/images.html', controller: 'MediaController'});
  $routeProvider.when('/team/:team', {templateUrl: 'partials/team.html', controller: 'TeamController'});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
