angular.module("ProjectSeries").factory("listSeriesAPI", function($http){
	var _getSeries = function () {
		return $http.get("http://localhost/ProjectSeries/series/?");
    };
    var _getSerie = function (idt_serie) {
      return $http.get("http://localhost/ProjectSeries/series/?idt_serie=" + idt_serie);
  };
  return{
   getSeries: _getSeries,
   getSerie: _getSerie
};
});