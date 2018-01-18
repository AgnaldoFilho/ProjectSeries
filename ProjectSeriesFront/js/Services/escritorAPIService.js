angular.module("ProjectSeries").factory("escritorAPI", function($http){
	var _getEscritor = function () {
		return $http.get("http://localhost/ProjectSeries/escritor/?");
    };
    return{
    	getEscritor: _getEscritor
    };
});