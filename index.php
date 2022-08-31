
<?php

require_once('config.php');
require_once('classes/banca.php');
require_once('classes/jogo.php');


$banca = new Banca;

$jogo = new Jogo(7);

$baralho = $banca->criarBaralho();
$banca->embaralhar($baralho);
$tombo = $banca->tombarCarta($baralho);



?>
<pre>
<ul>
    <li>N. de jogadores: <?= $jogo->getJogadores(); ?></li>
    <li>Tombo: <?= $banca->ilustrarCarta($tombo); ?></li>
    <li>Arquivo do Jogo: <?= $jogo->getArquivoJogo(); ?></li>
</ul>

</pre>
