<?php

include_once "model/Request.php";
include_once "control/UsuarioController.php";
include_once "control/SeriesController.php";
include_once "control/EpisodioController.php";
include_once "control/StatusEpisodioUsuarioController.php";
include_once "control/AtorController.php";
include_once "control/SeriesCategoriaController.php";
include_once "control/EscritorController.php";
include_once "control/PerfilUsuarioController.php";
include_once "control/TemporadaController.php";
include_once "control/UsuarioEpisodioController.php";
include_once "control/AtorTemporadaController.php";
include_once "control/PartEspecialController.php";
include_once "control/UsuarioAssistindoController.php";

class ResourceController
{

	private $controlMap = 
	[
		"series" => "SeriesController",
		"usuario" => "UsuarioController",
		"episodio" => "EpisodioController",
		"status_episodio_usuario" => "StatusEpisodioUsuarioController",
		"ator" => "AtorController",
		"series_categoria" => "SeriesCategoriaController",
		"escritor" => "EscritorController",
		"perfil_usuario" => "PerfilUsuarioController",
		"temporada" => "TemporadaController",
		"usuario_episodio" => "UsuarioEpisodioController",
		"ator_temporada" => "AtorTemporadaController",
		"part_especial" => "PartEspecialController",
		"usuario_assistindo" => "UsuarioAssistindoController",
	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}

	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}

	public function updateResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->update($request);
	}

	public function removeResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->remove($request);
	}
}