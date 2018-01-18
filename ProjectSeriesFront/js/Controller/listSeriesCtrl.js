angular.module("ProjectSeries").controller("listSeriesCtrl", function ($scope, $http, listSeriesAPI) 
{
	var carregarListSeries = function() {
		listSeriesAPI.getSeries().success(function (data) {
			$scope.listSeries = data;
		});
	};
	carregarListSeries();
});