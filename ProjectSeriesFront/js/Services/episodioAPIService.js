angular.module("ProjectSeries").factory("episodioAPI", function($http){
	var _getEpisodio = function (cod_serie) {
		return $http.get("http://localhost/ProjectSeries/episodio/?");
    };
    return{
    	getEpisodio: _getEpisodio
    };
});