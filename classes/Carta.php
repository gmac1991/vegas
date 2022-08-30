<?php

class Carta {

    private int $valor;
    private string $naipe;
    private int $manilha;
    private int $dono;

    function __construct() 
    {
        $this->dono = 0;
        $this->manilha = 0;
    }

    public function getValor():int 
    {
        return $this->valor;
    }

    public function setValor(int $valor) 
    {
        $this->valor = $valor;
    }

    public function getNaipe():string 
    {
        return $this->naipe;
    }

    public function setNaipe(string $naipe) 
    {
        $this->naipe = $naipe;
    }

    public function getManilha():int 
    {
        return $this->manilha;
    }

    public function setManilha() 
    {
        switch ($this->naipe)
        {
            case "P":
                $this->manilha = 17;
                break;
            case "C":
                $this->manilha = 16;
                break;
            case "E":
                $this->manilha = 15;
                break;
            case "O":
                $this->manilha = 14;
                break;
        }
        
    }

    public function getDono():int 
    {
        return $this->dono;
    }

    public function setDono(int $dono) 
    {
        $this->dono = $dono;
    }

    public function getPoder():int 
    {
        return $this->manilha != 0 ? $this->manilha : $this->valor;
    }

}