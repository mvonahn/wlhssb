'use strict';

/* Directives */


angular.module('wlhssbApp.directives', []).
  directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }])
  .directive('upcomingEvents', function(){
        return {
            restrict: 'E',
            templateUrl: '/partials/upcomingEvents.html',
            replace: true,
            controller: 'UpcomingEventController'
        }
    })
    .directive('sideBarImages', function(){
        return {
            restrict: 'E',
            templateUrl: '/partials/sideBarImages.html',
            replace: true,
            controller: 'MediaController'
        }
    })
    .directive('navBar', function(){
        return {
            restrict: 'E',
            templateUrl: '/partials/navBar.html',
            replace: true,
            controller: 'NavController'
        }
    })
    .directive('flashStore', function(){
        return {
            restrict: 'E',
            templateUrl: '/partials/flashStore.html',
            replace: true
        }
    });
