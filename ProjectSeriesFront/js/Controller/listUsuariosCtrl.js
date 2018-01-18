angular.module("ProjectSeries").controller("listUsuariosCtrl", function ($scope, $http, usuarioAPI, listUsuariosAPI, $location) 
{
	var carregarListUsuarios = function() {
		listUsuariosAPI.getUsuarios().success(function (data) {
			$scope.listUsuarios = data;
		});
	};
	$scope.deleteUsuarios = function (email) {
		usuarioAPI.deletePerfil(email).success(function (data) {
			alert("User successfully deleted!");
		});
	};
	carregarListUsuarios();
});