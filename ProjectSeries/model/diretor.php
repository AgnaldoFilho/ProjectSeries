<?php

class diretor
{
    private $idt_diretor;
    private $nme_diretor;

    public function __construct($idt_diretor,$nme_diretor)
    {
        $this->idt_diretor = $idt_diretor;
        $this->nme_diretor = $nme_diretor;
    }

    public function getIdtDiretor()
    {
        return $this->idt_diretor;
    }

    public function setIdtDiretor($idt_diretor)
    {
        $this->idt_diretor = $idt_diretor;
    }

    public function getNmeDiretor()
    {
        return $this->nme_diretor;
    }

    public function setNmeDiretor($nme_diretor)
    {
        $this->nme_diretor = $nme_diretor;
    }

}