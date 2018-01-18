angular.module("ProjectSeries").factory ("usuarioAPI",function($http){
	var _cadastrarUsuario = function(usuario){
		return $http.post("http://localhost/ProjectSeries/usuario/?idt_usuario=1&first_name="
			+ usuario.first_name + "&last_name=" + usuario.last_name + "&email=" + 
			usuario.email + "&birthdate=" + usuario.birthdate + "&senha=" + usuario.senha + 
			"&cod_perfil=1")
	};
	var _cadastrarUsuario = function(usuario){
		return $http.put("http://localhost/ProjectSeries/usuario/?idt_usuario=" + usuario.idt_usuario + "&first_name="
			+ usuario.first_name + "&last_name=" + usuario.last_name + "&email=" + 
			usuario.email + "&birthdate=" + usuario.birthdate + "&senha=" + usuario.senha + 
			"&cod_perfil=1")
	};
	var _getStatus = function (idt_usuario) {
		return $http.get("http://localhost/projectSeries/usuario_assistindo/?idt_usuario=" + idt_usuario);
	};
	var _deletePerfil = function (email) {
		console.log(email);
		return $http.delete("http://localhost/projectSeries/usuario/?email=" + email);
	};
	return {
		cadastrarUsuario: _cadastrarUsuario,
		getStatus: _getStatus,
		deletePerfil: _deletePerfil
	};
});