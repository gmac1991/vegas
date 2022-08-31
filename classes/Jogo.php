<?php

class Jogo {

    private int $jogadores;

    function _construct(int $jogadores = 2) {

        $this->jogadores = $jogadores;

        $timestamp = date("%d%m%yH:i:s");

        mkdir("C:\\dev\\fdp\\" . $timestamp);


    }

}