<?php

class temporada
{
    private $idt_temporada;
    private $cod_serie;
    private $num_temporada;
    private $ano_temporada;

    public function __construct($idt_temporada, $cod_serie, $num_temporada, $ano_temporada)
    {
        $this->idt_temporada = $idt_temporada;
        $this->cod_serie = $cod_serie;
        $this->num_temporada = $num_temporada;
        $this->ano_temporada = $ano_temporada;
    }


    public function getIdtTemporada()
    {
        return $this->idt_temporada;
    }

    public function setIdtTemporada($idt_temporada)
    {
        $this->idt_temporada = $idt_temporada;
    }

    public function getCodSerie()
    {
        return $this->cod_serie;
    }

    public function setCodSerie($cod_serie)
    {
        $this->cod_serie = $cod_serie;
    }

    public function getNumTemporada()
    {
        return $this->num_temporada;
    }

    public function setNumTemporada($num_temporada)
    {
        $this->num_temporada = $num_temporada;
    }

    public function getAnoTemporada()
    {
        return $this->ano_temporada;
    }

    public function setAnoTemporada($ano_temporada)
    {
        $this->ano_temporada = $ano_temporada;
    }


}