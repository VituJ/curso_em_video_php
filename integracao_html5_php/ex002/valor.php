<?php
    $nome           = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
    $ano_nascimento = isset($_GET["ano_nassscimento"])?$_GET["ano_nascimento"]:0;
    $sexo           = isset($_GET["sexo"])?$_GET["sexo"]:"[sexo não informado]";
    $idade          = date("Y") - $ano_nascimento;
    echo "$nome é $sexo e tem $idade anos";
?>
<br>
<a href="index.html">Voltar</a>