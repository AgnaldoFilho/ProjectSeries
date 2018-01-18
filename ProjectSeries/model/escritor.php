<?php

class escritor
{
    private $idt_escritor;
    private $nme_escritor;

    public function __construct($idt_escritor,$nme_escritor)
    {
        $this->idt_escritor = $idt_escritor;
        $this->nme_escritor = $nme_escritor;
    }

    public function getIdtEscritor()
    {
        return $this->idt_escritor;
    }

    public function setIdtEscritor($idt_escritor)
    {
        $this->idt_escritor = $idt_escritor;
    }

    public function getNmeEscritor()
    {
        return $this->nme_escritor;
    }

    public function setNmeEscritor($nme_escritor)
    {
        $this->nme_escritor = $nme_escritor;
    }



}