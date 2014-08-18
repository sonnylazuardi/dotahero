'use strict';

/* Controllers */

angular.module('myApp.controllers', [])
  .controller('HeroCtrl', ['$scope', 'Hero', function($scope, Hero) {
    $scope.heroes = Hero.customGET('', {page:1});
  }])
  .controller('HeroSingleCtrl', ['$scope', 'Hero', '$routeParams', function($scope, Hero, $routeParams) {
    $scope.hero = Hero.one($routeParams.id).get().$object;
  }])
  .controller('HeroCreateCtrl', ['$scope', 'Hero', '$location', function($scope, Hero, $location) {
    $scope.hero = {};
    $scope.save = function() {
      Hero.customPOST($.param($scope.hero), null, null, {'Content-Type': "application/x-www-form-urlencoded; charset=UTF-8"}).then(function() {
        $location.path('/hero');
      });
    }
  }])
  .controller('HeroUpdateCtrl', ['$scope', 'Hero', '$location', '$routeParams', 'HeroModel', function($scope, Hero, $location, $routeParams, HeroModel) {
    $scope.hero = Hero.one($routeParams.id).get().$object;
    $scope.save = function() {
      Hero.customPUT($.param(HeroModel.clean($scope.hero)), $scope.hero.id, null, {'Content-Type': "application/x-www-form-urlencoded; charset=UTF-8"}).then(function() {
        $location.path('/hero');
      });
    }
  }])
  .controller('HeroDeleteCtrl', ['$scope', 'Hero', '$location', '$routeParams', 'HeroModel', function($scope, Hero, $location, $routeParams, HeroModel) {
    console.log($routeParams.id);
    Hero.one($routeParams.id).remove().then(function() {
      $location.path('/hero');
    });
  }]);
