<?php

class series
{
    private $idt_serie;
    private $cod_categoria;
    private $name_series;
    private $initials;
    private $year_series;
    private $synopsis;
    private $link_trailer;
    private $img_poster;

    public function __construct($idt_serie, $cod_categoria,$name_series, $initials, $year_series, $synopsis, $link_trailer, $img_poster)
    {
        $this->idt_serie = $idt_serie;
        $this->cod_categoria = $cod_categoria;
        $this->name_series = $name_series;
        $this->initials = $initials;
        $this->year_series = $year_series;
        $this->synopsis = $synopsis;
        $this->link_trailer = $link_trailer;
        $this->img_poster = $img_poster;
    }

    public function getIdtSerie()
    {
        return $this->idt_serie;
    }

    public function setIdtSerie($idt_serie)
    {
        $this->idt_serie = $idt_serie;
    }

    public function getCodCategoria()
    {
        return $this->cod_categoria;
    }

    public function setCodCategoria($cod_categoria)
    {
        $this->cod_categoria = $cod_categoria;
    }

    public function setNameSeries($name_series)
    {
        $this->name_series = $name_series;
    }

    public function getNameSeries()
    {
        return $this->name_series;
    }

    public function getInitials()
    {
        return $this->initials;
    }

    public function setInitials($initials)
    {
        $this->initials = $initials;
    }

    public function setYearSeries($year_series)
    {
        $this->year_series = $year_series;
    }

    public function getYearSeries()
    {
        return $this->year_series;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function getLinkTrailer()
    {
        return $this->link_trailer;
    }

    public function setLinkTrailer($link_trailer)
    {
        $this->link_trailer = $link_trailer;
    }

    public function getImgPoster()
    {
        return $this->img_poster;
    }

    public function setImgPoster($img_poster)
    {
        $this->img_poster = $img_poster;
    }

}


