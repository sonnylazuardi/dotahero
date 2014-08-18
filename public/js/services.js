'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', []).
	value('version', '0.1')
	.service('Hero', ['Restangular', function(Restangular) {
		return Restangular.all('heroes');
	}])
	.service('HeroModel', ['Restangular', function(Restangular) {
		var attributes = ['id','name','alias','description','image','type','attack_type','strength','agility','intelligence','health','mana','damage_max','damage_min','range','armor','movement'];
		return {
			clean: function(restData) {
				var temp = {};
				attributes.forEach(function(item) {
					if (restData[item]) {
						temp[item] = restData[item];
					}
				});
				return temp;
			}
		};
	}]);
