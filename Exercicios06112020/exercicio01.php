<?php

    $nome = $_GET["nome"];
    $salario = $_GET["salario"];
    $percentual = $_GET["percentual"];

    $aumento = ($salario * ($percentual/100));
    $novosalario = $salario + $aumento;

    print("O funcionario ".$nome. " teve um aumento de ".$aumento. " reais e seu novo salario eh ".$novosalario);

?>