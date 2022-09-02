<?php

class Jogo {

    private int $id;
    private string $data;
    private int $jogadores;


    function __construct(int $jogadores = 2) {

        $this->jogadores = $jogadores;


    }


    public function getJogadores():int 
    {
        return $this->jogadores;
    }

    public function getId():int
    {
       return $this->id;
    }

    public function setId(int $id) 
    {
       $this->id = $id;
    }

    public function setData(string $data) 
    {
       $this->data = $data;
    }

    public function getData():string 
    {
       return $this->data;
    }



}