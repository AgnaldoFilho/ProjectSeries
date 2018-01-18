angular.module("ProjectSeries").controller("signInPageCtrl", function ($scope, $http, listUsuariosAPI, $location) 
{
	$scope.signIn = function(usuario){
		listUsuariosAPI.login(usuario).success(function (data) {
			if (data.length == 1) {
				$location.path("/principal");
			}else{
				alert("login / password invalid!")
			}
		})
	}
});