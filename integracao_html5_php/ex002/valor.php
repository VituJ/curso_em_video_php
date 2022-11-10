<?php
    $nome           = $_GET["nome"];
    $ano_nascimento = $_GET["ano_nascimento"];
    $sexo           = $_GET["sexo"];
    $idade          = date("Y") - $ano_nascimento;
    echo "$nome é $sexo tem $idade anos";
?>