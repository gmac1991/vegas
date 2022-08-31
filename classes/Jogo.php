<?php

class Jogo {

    private int $jogadores;
    private string $arquivo_jogo;

    function __construct(int $jogadores = 2) {

        $this->jogadores = $jogadores;

        $nome_arquivo = date("J_d-m-y_H-i-s");

        $arquivo = fopen(DIR_JOGOS . $nome_arquivo, "w");

        $this->arquivo_jogo = $nome_arquivo;

    }

    public function getArquivoJogo():string 
    {
        return $this->arquivo_jogo;
    }

    public function getJogadores():int 
    {
        return $this->jogadores;
    }

}