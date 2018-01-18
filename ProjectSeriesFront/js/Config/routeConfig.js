angular.module("ProjectSeries").config(function($routeProvider){
	$routeProvider.when("/principal",{
		templateUrl: "view/principal.html",
		controller: "principalCtrl"
	});
	$routeProvider.when("/listSeries",{
		templateUrl: "view/listSeries.html",
		controller: "listSeriesCtrl",
		resolve: {
			series: function(listSeriesAPI){
				return listSeriesAPI.getSeries();
			}
		}

	});
	$routeProvider.when("/series/:idt_serie",{
		templateUrl: "view/series.html",
		controller: "seriesCtrl",
		resolve: {
			serie: function(listSeriesAPI, $route){
				return listSeriesAPI.getSerie($route.current.params.idt_serie);
			},
			serieEp: function(seriesAPI, $route){
				return seriesAPI.getEpisodios($route.current.params.idt_serie);
			},
			atorSerie: function(seriesAPI, $route){
				return seriesAPI.getAtores($route.current.params.idt_serie);
			},
			escritorSerie: function(seriesAPI, $route){
				return seriesAPI.getEscritor($route.current.params.idt_serie);
			}
		}

	});
	$routeProvider.when("/listUsuarios",{
		templateUrl: "view/listUsuarios.html",
		controller: "listUsuariosCtrl",
		resolve: {
			usuarios: function(listUsuariosAPI){
				return listUsuariosAPI.getUsuarios();
			}
		}

	});
	
	$routeProvider.when("/userPage/:idt_usuario",{
		templateUrl: "view/userPage.html",
		controller: "userCtrl",
		resolve: {
			usuario: function(listUsuariosAPI, $route){
				return listUsuariosAPI.getUsuario($route.current.params.idt_usuario);
			},
			status: function(usuarioAPI, $route){
				return usuarioAPI.getStatus($route.current.params.idt_usuario);
			}
		}

	});
	
	$routeProvider.when("/signUpPage",{
		templateUrl: "view/signUpPage.html",
		controller: "signUpPageCtrl"

	});
	
	$routeProvider.when("/signInPage",{
		templateUrl: "view/signInPage.html",
		controller: "signInPageCtrl"

	});

	$routeProvider.when("/atualizaPerfil/:idt_usuario",{
		templateUrl: "view/atualizaPerfil.html",
		controller: "atualizaPerfilCtrl",
		resolve:{
			usuario: function(listUsuariosAPI, $route){
				return listUsuariosAPI.getUsuario($route.current.params.idt_usuario);
			}
		}

	});
	$routeProvider.otherwise({redirectTo:"/principal"})
});