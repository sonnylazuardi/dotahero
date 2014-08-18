'use strict';

/* Directives */


angular.module('myApp.directives', []).
  directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }])
  .directive('pagination', ['Hero', function(Hero) {
  	return {
  		scope: {results: '=pagination'},
  		templateUrl: 'partials/pagination.html',
  		link: function(scope) {

  			var paginate = function(results) {
  				if (!scope.currentPage) scope.currentPage = 0;
  				results.then(function(data){
	  				scope.total = data.total;
	  				scope.totalPages = data.last_page;
	  				scope.pages = [];
	  				for (var i = 1; i <= scope.totalPages; i++) {
	  					scope.pages.push(i);
	  				}
	  			});
  			};

  			scope.nextPage = function() {
				if (scope.currentPage < scope.totalPages) {
					scope.currentPage++;
				}
			}

			scope.prevPage = function() {
				if (scope.currentPage > 1) {
					scope.currentPage--;
				}
			}

			scope.firstPage = function() {
				scope.currentPage = 1;
			}

			scope.lastPage = function() {
				scope.currentPage = scope.totalPages;
			}

			scope.setPage = function(page) {
				scope.currentPage = page;
			}

  			var pageChange = function(newPage, lastPage) {
  				if (newPage != lastPage) {
  					scope.results = Hero.customGET('', {page: newPage});
  					scope.$emit('page.changed', newPage);
  				}
  			};

  			scope.$watch('results', paginate);
  			scope.$watch('currentPage', pageChange);
  		}
  	}
  }]);
