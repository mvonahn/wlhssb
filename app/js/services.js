'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('wlhssbApp.services', [])
    .value('version', '0.1')
    .factory('dates', function(){
        return {
            toDate: function(dt){
                return new Date(dt.replace(/-/g, "/"));
            },
            today: function() {
                return new Date();
            },
            convertToUTC: function(dt) {
                var localDate = new Date(dt);
                var localTime = localDate.getTime();
                var localOffset = localDate.getTimezoneOffset() * 60000;
                return new Date(localTime + localOffset);
            }
        }
    });


