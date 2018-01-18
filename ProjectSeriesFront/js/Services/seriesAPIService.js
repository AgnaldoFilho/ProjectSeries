angular.module("ProjectSeries").factory("seriesAPI", function($http){

    var _getSerieEp = function (idt_serie) {
        return $http.get("http://localhost/ProjectSeries/series/?idt_serie=" + idt_serie);
    };
    var _getEpisodios = function (idt_serie) {
      return $http.get("http://localhost/ProjectSeries/episodio/?idt_serie=" + idt_serie);
  };
  var _getAtores = function (idt_serie) {
    return $http.get("http://localhost/ProjectSeries/ator_temporada/?idt_serie=" + idt_serie);
};
var _getEscritor = function (idt_serie) {
    return $http.get("http://localhost/ProjectSeries/escritor/?idt_serie=" + idt_serie);
};
var _setEpisodiosAssistidos = function (assistido) {
    return $http.post("http://localhost/ProjectSeries/usuario_assistindo/?idt_usuario_assistindo=1&cod_usuario=" +
       assistido.cod_usuario + "&cod_serie=" + assistido.cod_serie + "&cod_temporada=" +
       assistido.cod_temporada + "&cod_episodio=" + assistido.cod_episodio);
};

return{
    getSerieEp: _getSerieEp,
    getEpisodios: _getEpisodios,
    setEpisodiosAssistidos: _setEpisodiosAssistidos,
    getAtores: _getAtores,
    getEscritor: _getEscritor
};
});