angular.module("ProjectSeries").controller("atualizaPerfilCtrl", function ($scope, $http, usuario, usuarioAPI, $location) 
{
	var formatDate = function (date) {
		var day = date.getDate();
		var month = date.getMonth();
		var year = date.getFullYear();
		return year + "-" + month + "-" + day;
	};
	var ToObject = function (usuario) {
		return {
			idt_usuario: usuario[0].idt_usuario,
			first_name: usuario[0].first_name,
			last_name: usuario[0].last_name,
			email: usuario[0].email,
			birthdate: new Date(usuario[0].birthdate),
			senha: usuario[0].senha,
			cod_perfil: usuario[0].cod_perfil
		};
	};

	$scope.atualizaPerfil = function(usuario){
		$scope.adicionarU;
		usuario.birthdate = formatDate(usuario.birthdate);
		usuarioAPI.cadastrarUsuario(usuario).success(function(data){
			delete $scope.usuario;
			alert("User successfully changed!");
			$location.path("/principal");
			$scope.usuarioForm.$setPristine();
		});

	};
	$scope.usuario = ToObject(usuario.data);
});