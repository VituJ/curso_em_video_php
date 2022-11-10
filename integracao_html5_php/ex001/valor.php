<?php
    $valor = $_GET["v"]; 
    $rq    = sqrt($valor);
    echo "A raiz quadrada de $valor = " . number_format($rq,2) ;
?>
<br>
<a href="index.html">Voltar</a>