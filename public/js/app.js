// Declare use of strict javascript
'use strict';

// Application -----------------------------------------------------------------

var coreApp = angular.module('base-name-app', ['ngResource']
    , function($interpolateProvider){

        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

