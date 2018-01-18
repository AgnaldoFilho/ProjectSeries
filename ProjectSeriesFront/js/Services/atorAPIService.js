angular.module("ProjectSeries").factory("atorAPI", function($http){
	var _getAtores = function () {
		return $http.get("http://localhost/ProjectSeries/ator_temporada/?");
    };
    return{
    	getAtores: _getAtores
    };
});