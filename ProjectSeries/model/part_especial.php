<?php

class part_especial
{
    private $idt_part_especial;
    private $cod_especial;
    private $cod_ator;

    public function __construct($idt_part_especial,$cod_especial,$cod_ator)
    {
        $this->idt_part_especial = $idt_part_especial;
        $this->cod_especial = $cod_especial;
        $this->cod_ator = $cod_ator;
    }

    public function getIdtPartEspecial()
    {
        return $this->idt_part_especial;
    }

    public function setIdtPartEspecial($idt_part_especial)
    {
        $this->idt_part_especial = $idt_part_especial;
    }

    public function getCodEspecial()
    {
        return $this->cod_especial;
    }

    public function setCodEspecial($cod_especial)
    {
        $this->cod_especial = $cod_especial;
    }

    public function getCodAtor()
    {
        return $this->cod_ator;
    }

    public function setCodAtor($cod_ator)
    {
        $this->cod_ator = $cod_ator;
    }

}