'use strict';

/* Controllers */

angular.module('wlhssbApp.controllers', [])
    .controller('MyCtrl1', function($scope, $http, dates, $modal, $log) {

        console.log('Main Controller');

    $http.get('/ws/post/' ).success(function(response) {
        $scope.posts = response;
    });

    $scope.convertToUTC = dates.convertToUTC;

    })
    .controller('RosterController', function($scope, $http, $modal, $log, $routeParams) {

        $http.get('/ws/roster/' + $routeParams.team ).success(function(response) {
            $scope.roster = response;
        });

        $scope.sort = {
            column: 'LastName',
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
    })
    .controller('GameController', function($scope, $http, $modal, $routeParams, dates) {

        $http.get('/ws/game/' + $routeParams.team ).success(function(response) {
            $scope.games = response;
        });

        $scope.toDate = dates.toDate;

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
    })
    .controller('CalendarController', function($scope, $http, $modal, $log) {

        console.log('Calendar');

        $scope.teamEvents = {
            color: '#f05800',
            textColor: 'black',
            url:'/ws/events/team'
        };
        $scope.varsityEvents = {
            color: '#ffcc00',
            textColor: 'black',
            url:'/ws/events/varsity'
        };
        $scope.jvEvents = {
            color: '#222',
            textColor: 'yellow',
            url:'/ws/events/jv'
        };

        /* alert on eventClick */
        $scope.alertOnEventClick = function( event, allDay, jsEvent, view ){
            $scope.alertMessage = (event.title + ' was clicked ');
        };
        /* alert on Drop */
        $scope.alertOnDrop = function(event, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view){
            $scope.alertMessage = ('Event Droped to make dayDelta ' + dayDelta);
        };
        /* alert on Resize */
        $scope.alertOnResize = function(event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view ){
            $scope.alertMessage = ('Event Resized to make dayDelta ' + minuteDelta);
        };
        /* Change View */
        $scope.changeView = function(view,calendar) {
            calendar.fullCalendar('changeView',view);
        };
        /* Change View */
        $scope.renderCalender = function(calendar) {
            calendar.fullCalendar('render');
        };
        /* config object */
        $scope.uiConfig = {
            calendar:{
                height: 600,
                width: 800,
                editable: false,
                header:{
                    left: 'title',
                    center: '',
                    right: 'today prev,next'
                }
            }
        };

        /* event sources array*/
        $scope.eventSources = [$scope.teamEvents, $scope.jvEvents, $scope.varsityEvents];
    })
    .controller('NavController', function($scope, $location) {

        $scope.isCollapsed = true;
        $scope.isActive = function (viewLocation) {
            return (viewLocation === $location.path());
        };
    })
    .controller('TeamController', function($scope, $location, $http, $routeParams) {
        $http.get('/ws/team/' + $routeParams.team ).success(function(response) {
            $scope.team = response;
        });
    })
    .controller('UpcomingEventController', function($scope, $location, $http, dates) {
        $http.get('/ws/events/upcoming').success(function(response) {
            $scope.upcomingEvents = response;
        });

        $scope.toDate = dates.toDate;
    })
    .controller('ContactController' , function($scope, $location, $http) {
        $http.get('/ws/contact').success(function(response) {
            $scope.contacts = response;
        });
    })
    .controller('MediaController', function($scope, $location, $routeParams) {
        $scope.team =  $routeParams.team;

        $scope.myInterval = 5000;
        var slides = $scope.slides = [];
        $scope.addSlide = function(index) {
            slides.push({
                image: '/files/fallCamp2013/thumbnails/' + index + '.jpg'
            });
        };
        for (var i=1; i<20; i++) {
            $scope.addSlide(i);
        }
    });
