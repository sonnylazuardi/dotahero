'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
  'ngRoute',
  'myApp.filters',
  'myApp.services',
  'myApp.directives',
  'myApp.controllers',
  'ngResource',
  'restangular'
]).
config(['$routeProvider', 'RestangularProvider', function($routeProvider, RestangularProvider) {
  RestangularProvider.setBaseUrl('http://localhost/simplecrud/laravel/public')  
  $routeProvider.when('/hero', {templateUrl: 'partials/hero.html', controller: 'HeroCtrl'});
  $routeProvider.when('/hero/create', {templateUrl: 'partials/herocreate.html', controller: 'HeroCreateCtrl'});
  $routeProvider.when('/hero/:id/update', {templateUrl: 'partials/herocreate.html', controller: 'HeroUpdateCtrl'});
  $routeProvider.when('/hero/:id/delete', {template: '', controller: 'HeroDeleteCtrl'});
  $routeProvider.when('/hero/:id', {templateUrl: 'partials/herosingle.html', controller: 'HeroSingleCtrl'});
  $routeProvider.otherwise({redirectTo: '/hero'});
}]);
