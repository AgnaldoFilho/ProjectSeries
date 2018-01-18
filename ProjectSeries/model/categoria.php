<?php

class categoria
{
    private $idt_categoria;
    private $nme_categoria;

    public function __construct($idt_categoria, $nme_categoria)
    {
        $this->idt_categoria = $idt_categoria;
        $this->nme_categoria = $nme_categoria;
    }

    public function getIdtCategoria()
    {
        return $this->idt_categoria;
    }

    public function setIdtCategoria($idt_categoria)
    {
        $this->idt_categoria = $idt_categoria;
    }

    public function getNmeCategoria()
    {
        return $this->nme_categoria;
    }

    public function setNmeCategoria($nme_categoria)
    {
        $this->nme_categoria = $nme_categoria;
    }



}