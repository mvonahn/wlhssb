'use strict';

/* Controllers */

angular.module('wlhssbApp.controllers', [])
    .controller('MyCtrl1', function($scope, $http, $modal, $log) {

        console.log('Main Controller');

    $http.get('/ws/post/' ).success(function(response) {
        $scope.posts = response;
    });

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
    .controller('GameController', function($scope, $http, $modal, $routeParams) {

        $http.get('/ws/game/' + $routeParams.team ).success(function(response) {
            $scope.games = response;
        });

        $scope.toDate = function(dt) {
            return Date.parse(dt);
        };

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
/**
        $http.get('/ws/events').success(function(response) {
            $scope.events = response;
        });
*/
        console.log('Calendar');
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


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
        /* add and removes an event source of choice */
        $scope.addRemoveEventSource = function(sources,source) {
            var canAdd = 0;
            angular.forEach(sources,function(value, key){
                if(sources[key] === source){
                    sources.splice(key,1);
                    canAdd = 1;
                }
            });
            if(canAdd === 0){
                sources.push(source);
            }
        };
        /* add custom event*/
        $scope.addEvent = function() {
            $scope.events.push({
                title: 'Open Sesame',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                className: ['openSesame']
            });
        };
        /* remove event */
        $scope.remove = function(index) {
            $scope.events.splice(index,1);
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
                height: 450,
                width: 800,
                editable: true,
                header:{
                    left: 'title',
                    center: '',
                    right: 'today prev,next'
                },
                eventClick: $scope.alertOnEventClick,
                eventDrop: $scope.alertOnDrop,
                eventResize: $scope.alertOnResize
            }
        };

        /* event sources array*/
        $scope.eventSources = [$scope.teamEvents, $scope.jvEvents, $scope.varsityEvents];
    })
    .controller('NavController', function($scope, $location) {

        $scope.isActive = function (viewLocation) {
            return (viewLocation === $location.path());
        };
    })
    .controller('TeamController', function($scope, $location, $http, $routeParams) {
        $http.get('/ws/team/' + $routeParams.team ).success(function(response) {
            $scope.team = response;
        });
    })
    .controller('UpcomingEventController', function($scope, $location, $http, $routeParams) {
        $http.get('/ws/events/upcoming').success(function(response) {
            $scope.upcomingEvents = response;
        });

        $scope.toDate = function(dt) {
            return Date.parse(dt);
        };
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
        for (var i=1; i<62; i++) {
            $scope.addSlide(i);
        }
    });
