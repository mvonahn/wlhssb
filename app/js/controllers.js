'use strict';

/* Controllers */

angular.module('wlhssbApp.controllers', [])
    .controller('MyCtrl1', function($scope, $http, $modal, $log) {

    $scope.convertToUTC = function(dt) {
        var localDate = new Date(dt);
        var localTime = localDate.getTime();
        var localOffset = localDate.getTimezoneOffset() * 60000;
        return new Date(localTime + localOffset);
    };

    $scope.format = 'yyyy/MM/dd';
    $scope.today = function() {
        $scope.dt = new Date();
    };
    $scope.today();

    $scope.showWeeks = false;

    $scope.clear = function () {
        $scope.dt = null;
    };

    $scope.dateOptions = {
        'year-format': "'yy'",
        'starting-day': 1,
        'show-weeks' : false
    };

  })
    .controller('RosterController', function($scope, $http, $modal, $log) {

        $scope.heading = "Roster";
    })
    .controller('GameController', function($scope, $http, $modal, $log) {

        $http.get('/ws/game').success(function(response) {
            $scope.games = response;
        });


        $scope.heading = "Game Schedule";

        $scope.sort = {
            column: 'date',
            descending: false
        };

        $scope.changeSorting = function(column) {
            var sort = $scope.sort;

            if (sort.column == column) {
                sort.descending = !sort.descending;
            } else {
                sort.column = column;
                sort.descending = false;
            }
        };
    });
