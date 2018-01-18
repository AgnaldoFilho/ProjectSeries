<?php

class usuario_assistindo
{
    private $idt_usuario_assistindo;
    private $cod_usuario;
    private $cod_serie;
    private $cod_temporada;
    private $cod_episodio;

    public function __construct($idt_usuario_assistindo, $cod_usuario, $cod_serie, $cod_temporada, $cod_episodio)
    {
        $this->idt_usuario_assistindo = $idt_usuario_assistindo;
        $this->cod_usuario = $cod_usuario;
        $this->cod_serie = $cod_serie;
        $this->cod_temporada = $cod_temporada;
        $this->cod_episodio = $cod_episodio;
    }

    public function getIdtUsuarioAssistindo()
    {
        return $this->idt_usuario_assistindo;
    }

    public function setIdtUsuarioAssistindo($idt_usuario_assistindo)
    {
        $this->idt_usuario_assistindo = $idt_usuario_assistindo;
    }

    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }

    public function getCodSerie()
    {
        return $this->cod_serie;
    }

    public function setCodSerie($cod_serie)
    {
        $this->cod_serie = $cod_serie;
    }

    public function getCodTemporada()
    {
        return $this->cod_temporada;
    }

    public function setCodTemporada($cod_temporada)
    {
        $this->cod_temporada = $cod_temporada;
    }

    public function getCodEpisodio()
    {
        return $this->cod_episodio;
    }

    public function setCodEpisodio($cod_episodio)
    {
        $this->cod_episodio = $cod_episodio;
    }

}