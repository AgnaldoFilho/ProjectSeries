<?php

class usuario
{
    private $idt_usuario;
    private $first_name;
    private $last_name;
    private $email;
    private $birthDate;
    private $senha;
    private $cod_perfil;

    public function __construct($idt_usuario, $first_name, $last_name, $email, $birthDate, $senha, $cod_perfil)
    {
        $this->idt_usuario = $idt_usuario;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->senha = $senha;
        $this->cod_perfil = $cod_perfil;
    }

    public function getIdtUsuario()
    {
        return $this->idt_usuario;
    }

    public function setIdtUsuario($idt_usuario)
    {
        $this->idt_usuario = $idt_usuario;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getCodPerfil()
    {
        return $this->cod_perfil;
    }

    public function setCodPerfil($cod_perfil)
    {
        $this->cod_perfil = $cod_perfil;
    }


}