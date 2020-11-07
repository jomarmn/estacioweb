<?php

    $nome = $_GET["nome"];
    $diarias = $_GET["diarias"];

    $totaldiarias = ($diarias * 40);
    
    if ($diarias < "10") {
        $servico = $diarias * 15;
    } else {
        $servico = $diarias * 8;
    }

    $total = $totaldiarias + $servico;

    print("O hospede ".$nome. " gastou ".$servico. "reais em servico e " .$total. " reais na conta total da pousada.");
?>