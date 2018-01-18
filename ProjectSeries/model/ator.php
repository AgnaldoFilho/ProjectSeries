<?php

class ator
{
    private $idt_ator;
    private $nme_ator;

    public function __construct($idt_ator,$nme_ator)
    {
        $this->idt_ator = $idt_ator;
        $this->nme_ator = $nme_ator;
    }

    public function getIdtAtor()
    {
        return $this->idt_ator;
    }

    public function setIdtAtor($idt_ator)
    {
        $this->idt_ator = $idt_ator;
    }

    public function getNmeAtor()
    {
        return $this->nme_ator;
    }

    public function setNmeAtor($nme_ator)
    {
        $this->nme_ator = $nme_ator;
    }

}