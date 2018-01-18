<?php

class series_categoria
{
    private $idt_series_categoria;
    private $cod_serie;
    private $cod_categoria;

    public function __construct($idt_series_categoria, $cod_serie, $cod_categoria)
    {
        $this->idt_series_categoria = $idt_series_categoria;
        $this->cod_serie = $cod_serie;
        $this->cod_categoria = $cod_categoria;
    }

    public function getIdtSeriesCategoria()
    {
        return $this->idt_series_categoria;
    }

    public function setIdtSeriesCategoria($idt_series_categoria)
    {
        $this->idt_series_categoria = $idt_series_categoria;
    }

    public function getCodSerie()
    {
        return $this->cod_serie;
    }

    public function setCodSerie($cod_serie)
    {
        $this->cod_serie = $cod_serie;
    }

    public function getCodCategoria()
    {
        return $this->cod_categoria;
    }

    public function setCodCategoria($cod_categoria)
    {
        $this->cod_categoria = $cod_categoria;
    }

}