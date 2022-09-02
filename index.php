
<?php


require_once('classes/banca.php');


$banca = new Banca;

$jogo = $banca->criarJogo(4);

$baralho = $banca->criarBaralho();
$banca->embaralhar($baralho);
$tombo = $banca->tombarCarta($baralho);



?>
<pre>
<ul>
    <li>ID: <?= $jogo->getId(); ?></li>
    <li>N. de jogadores: <?= $jogo->getJogadores(); ?></li>
    <li>Máximo de cartas por jogador: <?= floor(39 / $jogo->getJogadores()); ?></li>
    <li>Tombo: <?= $banca->ilustrarCarta($tombo); ?></li>
 
</ul>

</pre>
