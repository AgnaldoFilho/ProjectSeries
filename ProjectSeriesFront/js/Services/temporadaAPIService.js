angular.module("ProjectSeries").factory("temporadaAPI", function($http){
	var _getTemporada = function () {
		return $http.get("http://localhost/ProjectSeries/temporada/?");
    };
    return{
    	getTemporada: _getTemporada
    };
});