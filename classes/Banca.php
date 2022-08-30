<?php
require_once('classes/carta.php');

class Banca {

    private array $baralho;

    public function criarBaralho():array
    {
        $this->baralho = array();
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
                            array_push($cartas, new Carta());
                            $cartas[array_key_last($cartas)]->setValor($valor);
                            $cartas[array_key_last($cartas)]->setNaipe('O');
                            break;
                        
                        case 1:
                            array_push($cartas, new Carta());
                            $cartas[array_key_last($cartas)]->setValor($valor);
                            $cartas[array_key_last($cartas)]->setNaipe('E');
                            break;
                        case 2:
                            array_push($cartas, new Carta());
                            $cartas[array_key_last($cartas)]->setValor($valor);
                            $cartas[array_key_last($cartas)]->setNaipe('C');
                            break;
                    
                        case 3:
                            array_push($cartas, new Carta());
                            $cartas[array_key_last($cartas)]->setValor($valor);
                            $cartas[array_key_last($cartas)]->setNaipe('P');
                            break;
                    }
                    $valor++;
                    $i += 3;
                }
            }
        }

        return $this->baralho;
    }
    
    public function embaralhar($baralho):array
    {
        return shuffle($baralho);
    }
    
    public function exibirCarta(Carta $carta) 
    {
        $figura = NULL;
        $simbolo = NULL;
    }
}


// 

// $semente_carta = rand(0,39);
// $semente_manilha = rand(0,39);
// $cartas[$semente_manilha]->setManilha();
// $carta = $cartas[$semente_carta];

// switch($carta->getValor())
// {
//     case 8:
//         $figura = "Q";
//         break;
//     case 9:
//         $figura = "J";
//         break;
//     case 10:
//         $figura = "K";
//         break;
//     case 11:
//         $figura = "A";
//         break;
//     case 12:
//         $figura = "2";
//         break;
//     case 13:
//         $figura = "3";
//         break;
//     default:
//         $figura = $carta->getValor();
//         break;

// }
// switch($carta->getNaipe())
// {
//     case "P":
//         $simbolo = "&#9827;";
//         break;
//     case "C":
//         $simbolo = "&#9829;";
//         break;
//     case "E":
//         $simbolo = "&#9824;";
//         break;
//     case "O":
//         $simbolo = "&#9830;";
//         break;

// }
