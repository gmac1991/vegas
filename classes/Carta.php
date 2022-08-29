<?php

class Carta {

    private int $valor;
    private string $figura;
    private int $manilha;
    private int $dono;

    function __construct() {
        $this->dono = 0;
        $this->manilha = 0;
    }

    public function verDono():int {
        return $this->dono;
    }
}