<?php

class perfil_usuario
{
    private $idt_perfil_usuario;
    private $nme_perfil;

    public function __construct($idt_perfil_usuario, $nme_perfil)
    {
        $this->idt_perfil_usuario = $idt_perfil_usuario;
        $this->nme_perfil = $nme_perfil;
    }

    public function getIdtPerfilUsuario()
    {
        return $this->idt_perfil_usuario;
    }

    public function setIdtPerfilUsuario($idt_perfil_usuario)
    {
        $this->idt_perfil_usuario = $idt_perfil_usuario;
    }

    public function getNmePerfil()
    {
        return $this->nme_perfil;
    }

    public function setNmePerfil($nme_perfil)
    {
        $this->nme_perfil = $nme_perfil;
    }


}