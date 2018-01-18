<?php

class ator_temporada
{
    private $idt_ator_temporada;
    private $cod_temporada;
    private $cod_ator;
    private $primeira_participacao;
    private $ultima_participacao;

    public function __construct($idt_ator_temporada,$cod_temporada,$cod_ator,$primeira_participacao,$ultima_participacao)
    {
        $this->idt_ator_temporada = $idt_ator_temporada;
        $this->cod_temporada = $cod_temporada;
        $this->cod_ator = $cod_ator;
        $this->primeira_participacao = $primeira_participacao;
        $this->ultima_participacao = $ultima_participacao;
    }

    public function getIdtAtorTemporada()
    {
        return $this->idt_ator_temporada;
    }

    public function setIdtAtorTemporada($idt_ator_temporada)
    {
        $this->idt_ator_temporada = $idt_ator_temporada;
    }

    public function getCodTemporada()
    {
        return $this->cod_temporada;
    }

    public function setCodTemporada($cod_temporada)
    {
        $this->cod_temporada = $cod_temporada;
    }

    public function getCodAtor()
    {
        return $this->cod_ator;
    }

    public function setCodAtor($cod_ator)
    {
        $this->cod_ator = $cod_ator;
    }

    public function getPrimeiraParticipacao()
    {
        return $this->primeira_participacao;
    }

    public function setPrimeiraParticipacao($primeira_participacao)
    {
        $this->primeira_participacao = $primeira_participacao;
    }

    public function getUltimaParticipacao()
    {
        return $this->ultima_participacao;
    }

    public function setUltimaParticipacao($ultima_participacao)
    {
        $this->ultima_participacao = $ultima_participacao;
    }

}