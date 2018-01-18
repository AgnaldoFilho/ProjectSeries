<?php

class status_episodio_usuario
{
    private $idt_status_episodio_usuario;
    private $nme_status;

    public function __construct($idt_status_episodio_usuario, $nme_status)
    {
        $this->idt_status_episodio_usuario = $idt_status_episodio_usuario;
        $this->nme_status = $nme_status;
    }

    public function getIdtStatusEpisodioUsuario()
    {
        return $this->idt_status_episodio_usuario;
    }

    public function setIdtStatusEpisodioUsuario($idt_status_episodio_usuario)
    {
        $this->idt_status_episodio_usuario = $idt_status_episodio_usuario;
    }

    public function getNmeStatus()
    {
        return $this->nme_status;
    }

    public function setNmeStatus($nme_status)
    {
        $this->nme_status = $nme_status;
    }


}