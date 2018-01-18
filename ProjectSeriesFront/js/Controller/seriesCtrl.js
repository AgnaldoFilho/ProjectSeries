angular.module("ProjectSeries").controller("seriesCtrl", function ($scope, $http, $routeParams, serie, serieEp, atorSerie, escritorSerie, seriesAPI, $location) 
{
	$scope.serie = serie.data;
	$scope.atorSerie = atorSerie.data;
	$scope.escritorSerie = escritorSerie.data;

	$scope.checkAll = function (temp) {
		/*if ($scope.selectedAll) {
			$scope.selectedAll = true;
		} else {
			$scope.selectedAll = false;
		}*/

		$scope.allEp = true;

		for (var i = 0; i < $scope.serieEp.id.length; i++) {
			if($scope.serieEp[i].id == temp.id){
				for (var j = 0; j < $scope.serieEp[i].episodios.length; j++) {
					$scope.serieEp[i].episodios[j].id.checkbox.value=true;
				}
			}
		}

		/*angular.forEach($scope.serieEp, function (episodio) {
			episodio.selecionado = $scope.selectedAll;
		});*/
	};

	$scope.adicionarEpisodios = function () {
		$scope.adicionar;
		var serieEpSize=0;
		var temporada;

		for (var temporada in $scope.serieEp) {
			serieEpSize++;
		}

		for (var i = 0; i < serieEpSize; i++) {

			var tempObj = $scope.serieEp[i];
			var serieIdt = $scope.serie[0].idt_serie;
			var episodioObj = $scope.serieEp[i].episodios;

			if(tempObj.checkbox.value==true){
				for (var j = 0; j < episodioObj.length; j++) {
					if(episodioObj[j].checkbox.value == true){
						temporada = {
							cod_usuario: 2, 
							cod_serie: serieIdt,
							cod_temporada: tempObj.id,
							cod_episodio: episodioObj[j].id
						}
						seriesAPI.setEpisodiosAssistidos(temporada);
						alert("episodes successfully added!");
						$location.path("/principal");
					}
				}
			}
		}

		/*var episodiosAssistidos = temporadas.filter(function (temporada) {
			if (temporada.episodio.checkbox.value) 
				return {
					cod_usuario: 2,
					cod_serie: $scope.serie.idt_serie,
					cod_temporada:temporada.idt_temporada,
					cod_episodio: temporada.episodio.idt_episodio
			}
		});
		angular.forEach(episodiosAssistidos, function (episodiosAssistido) {
			seriesAPI.setEpisodiosAssistidos(episodioAssistido);
		});*/
	};

	var objectfyTemporadasComEpisodios = function(serie){
		episodioObj = {};
		var episodiosArr = [];
		var temporadaArr = [];
		var j = 1;

		temporadasObj = {};

		for (var i = 0; i < serie.length; i++) {
			temporadaArr[serie[i].num_temporada-1] = serie[i].num_temporada;
		}

		for (var i = 0; i < serie.length; i++) {
			while(j == serie[i].num_temporada){
				episodioObj = {id: serie[i].idt_episodio, episodio: serie[i].num_episodio, checkbox: {value : false}};
				episodiosArr.push(episodioObj);
				i++;
				
				if(i==serie.length){
					break;
				}
			}
			i--;
			temporadasObj[j-1] = {id: serie[i].cod_temporada ,temporada: temporadaArr[j-1], checkbox: {value : false}, episodios:episodiosArr };    	
			episodiosArr = [];
			j++;
		}

		$scope.serieEp = temporadasObj;
	};

	objectfyTemporadasComEpisodios(serieEp.data);
	
});              