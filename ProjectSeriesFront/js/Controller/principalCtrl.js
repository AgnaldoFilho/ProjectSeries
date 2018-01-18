angular.module("ProjectSeries").controller("principalCtrl", function($scope, $http)
{
		/*var carregarSeriesPrincipais = function() {
			principalAPI.getSeriesPrincipais().success(function (data) {
				$scope.principal = data;
			});
		};
		carregarSeriesPrincipais();*/
		var carregarSeriesPorCategoria = function() {
			$http.get("http://localhost/ProjectSeries/series_categoria/?").success(function (data) {
				$scope.categoria = data;
			});
		};
		carregarSeriesPorCategoria();
	});