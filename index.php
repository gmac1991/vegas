
<?php

require_once('classes/banca.php');

?>
<pre>
<ul>
    <li>Semente: <?= $semente_carta ?></li>
    <li>Carta: <?= $figura . $simbolo ?></li>
    <li>Poder: <?= $carta->getPoder() ?></li>
</ul>
</pre>
