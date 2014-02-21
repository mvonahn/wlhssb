'use strict';

// Declare app level module which depends on filters, and services
angular.module('wlhssbApp', [
  'ngRoute',
  'wlhssbApp.filters',
  'wlhssbApp.services',
  'wlhssbApp.directives',
  'wlhssbApp.controllers',
  'ui.bootstrap',
  'ui.calendar',
  'ngSanitize'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {templateUrl: 'partials/home.html', controller: 'MyCtrl1'});
  $routeProvider.when('/calendar', {templateUrl: 'partials/calendar.html', controller: 'CalendarController'});
  $routeProvider.when('/contact', {templateUrl: 'partials/contact.html', controller: 'ContactController'});
  $routeProvider.when('/philosophy', {templateUrl: 'partials/philosophy.html', controller: 'MyCtrl1'});
  $routeProvider.when('/media', {templateUrl: 'partials/images.html', controller: 'MediaController'});
  $routeProvider.when('/team/:team', {templateUrl: 'partials/team.html', controller: 'TeamController'});
  $routeProvider.when('/fundraising', {templateUrl: 'partials/Fundraising.html', controller: 'MyCtrl1'});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
