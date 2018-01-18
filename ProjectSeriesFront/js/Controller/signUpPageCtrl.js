angular.module("ProjectSeries").controller("signUpPageCtrl", function ($scope, $http, usuarioAPI, $location) 
{
	$scope.usuario = {};

	var formatDate = function (date) {
		var day = date.getDate();
		var month = date.getMonth();
		var year = date.getFullYear();
		return year + "-" + month + "-" + day;
	}

	$scope.adicionarUsuario = function(usuario){
		$scope.adicionarU;
		usuario.birthdate = formatDate(usuario.birthdate);
		usuarioAPI.cadastrarUsuario(usuario).success(function(data){
			delete $scope.usuario;
			alert("Usuário Cadastrado com Sucesso!");
			$location.path("/principal");
			$scope.usuarioForm.$setPristine();
		});

	};
});