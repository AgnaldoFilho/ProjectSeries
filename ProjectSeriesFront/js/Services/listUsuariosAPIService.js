angular.module("ProjectSeries").factory("listUsuariosAPI", function($http){
	var _getUsuarios = function () {
		return $http.get("http://localhost/ProjectSeries/usuario/?");
    };
    var _getUsuario = function (idt_usuario) {
      return $http.get("http://localhost/ProjectSeries/usuario/?idt_usuario=" + idt_usuario);
  };
  var _login = function(usuario){
      return $http.get("http://localhost/ProjectSeries/usuario/?email=" + usuario.email + "&senha=" + usuario.senha);  
  };
  return{
   getUsuarios: _getUsuarios,
   getUsuario: _getUsuario,
   login: _login
};
});