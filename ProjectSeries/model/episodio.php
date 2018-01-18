 <?php

class episodio
{
    private $idt_episodio;
    private $cod_temporada;
    private $num_episodio;

    public function __construct($idt_episodio, $cod_temporada, $num_episodio)
    {
        $this->idt_episodio = $idt_episodio;
        $this->cod_temporada = $cod_temporada;
        $this->num_episodio = $num_episodio;
    }

    public function getIdtEpisodio()
    {
        return $this->idt_episodio;
    }

    public function setIdtEpisodio($idt_episodio)
    {
        $this->idt_episodio = $idt_episodio;
    }

    public function getCodTemporada()
    {
        return $this->cod_temporada;
    }

    public function setCodTemporada($cod_temporada)
    {
        $this->cod_temporada = $cod_temporada;
    }

    public function getNumEpisodio()
    {
        return $this->num_episodio;
    }

    public function setNumEpisodio($num_episodio)
    {
        $this->num_episodio = $num_episodio;
    }
}

