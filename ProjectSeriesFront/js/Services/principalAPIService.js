angular.module("ProjectSeries").factory("principalAPI", function($http){
	var _getSeriesPrincipais = function () {
		return $http.get("http://localhost/ProjectSeries/series/?");
    };
    var _getSerie = function (idt_serie) {
      return $http.get("http://localhost/ProjectSeries/series/" + idt_serie);
  };
  return{
   getSeriesPrincipais: _getSeriesPrincipais,
   getSerie: _getSerie
};
});