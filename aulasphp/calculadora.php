<?php

    $valorA = $_GET["valorA"];
    $valorB = $_GET["valorB"];

    if(isset($_GET["somar"])){
        $operacao = $valorA + $valorB;
        print("Soma: ".$operacao);
    }

    if(isset($_GET["subtrair"])){
        $operacao = $valorA - $valorB;
        print("Subtração: ".$operacao);
    }

    if(isset($_GET["multiplicar"])){
        $operacao = $valorA * $valorB;
        print("Mutiplicacão: ".$operacao);
    }

    if(isset($_GET["dividir"])){
        $operacao = $valorA / $valorB;
        print("Divisão: ".$operacao);
    }
?>