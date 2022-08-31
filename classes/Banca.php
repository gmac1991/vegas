<?php
require_once('classes/carta.php');
require_once('classes/jogo.php');

class Banca {

    private array $baralho;

    public function criarJogo(int $jogadores)
    {
        return new Jogo($jogadores);
    }

    public function criarBaralho():array
    {
        $b = array();
        $i = 0;
        while ($i < 40) 
        {
            for ($j = 0; $j < 4; $j++) 
            {
                $valor = 4;
                while ($valor < 14)
                {
                    switch($j) 
                    {
                        case 0:
                            array_push($b, new Carta());
                            $b[array_key_last($b)]->setValor($valor);
                            $b[array_key_last($b)]->setNaipe('O');
                            break;
                        
                        case 1:
                            array_push($b, new Carta());
                            $b[array_key_last($b)]->setValor($valor);
                            $b[array_key_last($b)]->setNaipe('E');
                            break;
                        case 2:
                            array_push($b, new Carta());
                            $b[array_key_last($b)]->setValor($valor);
                            $b[array_key_last($b)]->setNaipe('C');
                            break;
                    
                        case 3:
                            array_push($b, new Carta());
                            $b[array_key_last($b)]->setValor($valor);
                            $b[array_key_last($b)]->setNaipe('P');
                            break;
                    }
                    $valor++;
                    $i += 3;
                }
            }
        }

        $this->baralho = $b;

        return $this->baralho;
    }
    
    public function embaralhar(array &$baralho)
    {
        shuffle($baralho);
    }

    public function tombarCarta(array &$baralho):Carta
    {
        $chave = rand(0,39);
        $carta = array_slice($baralho,$chave,1); //copiando carta
        array_splice($baralho,$chave,1); //retirando a carta do baralho
        return $carta[0]; //retornando a carta copiada
    }
    
    public function ilustrarCarta(Carta $carta):string 
    {
        $figura = "";
        $simbolo = "";
        switch($carta->getValor())
        {
            case 8:
                $figura = "Q";
                break;
            case 9:
                $figura = "J";
                break;
            case 10:
                $figura = "K";
                break;
            case 11:
                $figura = "A";
                break;
            case 12:
            $figura = "2";
            break;
            case 13:
            $figura = "3";
            break;
            default:
            $figura = $carta->getValor();
            break;

        }
        switch($carta->getNaipe())
        {
        case "P":
            $simbolo = "&#9827;";
            break;
        case "C":
            $simbolo = "&#9829;";
            break;
        case "E":
            $simbolo = "&#9824;";
            break;
        case "O":
            $simbolo = "&#9830;";
            break;

        }

        return $figura . $simbolo;
    }

    
}


// 

// $semente_carta = rand(0,39);
// $semente_manilha = rand(0,39);
// $cartas[$semente_manilha]->setManilha();
// $carta = $cartas[$semente_carta];


