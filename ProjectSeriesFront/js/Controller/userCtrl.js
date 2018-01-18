angular.module("ProjectSeries").controller("userCtrl", function ($scope, $http, $routeParams, usuario, status) 
{
	$scope.usuario = usuario.data;
	$scope.status = status.data;
});