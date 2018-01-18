<?php

class usuario_episodio
{
    private $idt_usuario_episodio;
    private $cod_episodio;
    private $cod_usuario;
    private $cod_status;
    private $avaliacao;
    private $dta_atualizacao;
    private $comment;

    public function __construct($idt_usuario_episodio,$cod_episodio,$cod_usuario,$cod_status,$avaliacao,$dta_atualizacao,$comment)
    {
        $this->idt_usuario_episodio = $idt_usuario_episodio;
        $this->cod_episodio = $cod_episodio;
        $this->cod_usuario = $cod_usuario;
        $this->cod_status = $cod_status;
        $this->avaliacao = $avaliacao;
        $this->dta_atualizacao = $dta_atualizacao;
        $this->comment = $comment;
    }

    public function getIdtUsuarioEpisodio()
    {
        return $this->idt_usuario_episodio;
    }

    public function setIdtUsuarioEpisodio($idt_usuario_episodio)
    {
        $this->idt_usuario_episodio = $idt_usuario_episodio;
    }

    public function getCodEpisodio()
    {
        return $this->cod_episodio;
    }

    public function setCodEpisodio($cod_episodio)
    {
        $this->cod_episodio = $cod_episodio;
    }

    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }

    public function getCodStatus()
    {
        return $this->cod_status;
    }

    public function setCodStatus($cod_status)
    {
        $this->cod_status = $cod_status;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    public function getDtaAtualizacao()
    {
        return $this->dta_atualizacao;
    }

    public function setDtaAtualizacao($dta_atualizacao)
    {
        $this->dta_atualizacao = $dta_atualizacao;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

}