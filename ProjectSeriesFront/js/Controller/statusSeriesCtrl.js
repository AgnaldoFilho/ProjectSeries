angular.module("ProjectSeries").controller("statusSeriesCtrl", function ($scope, $http, $routeParams, seriesEp) 
{
		$scope.seriesEp = seriesEp.data;
});