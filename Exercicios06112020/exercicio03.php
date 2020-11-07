<?php

    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];

    $media = ($nota1+$nota2)/2;

    if ($media < "3") {
        $resultado = "Reprovado";
    } elseif ($media >= "3" and $media <= "7") {
        $resultado = "Exame";
    } else {
        $resultado = "Aprovado";
    }
    
    print("O aluno ".$nome. " ficou com a media ".$media. " e foi ".$resultado);
?>