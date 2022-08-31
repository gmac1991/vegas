
<?php

require_once('classes/banca.php');

$banca = new Banca;

$jogo = $banca->criarJogo(7);
$baralho = $banca->criarBaralho();
$banca->embaralhar($baralho);
$tombo = $banca->tombarCarta($baralho);

?>
<pre>
<ul>
    <li>Tombo: <?= $banca->ilustrarCarta($tombo) ?></li>
</ul>

</pre>
