<?php

    $chicoAltura = $_GET["chicoAltura"];
    $jucaAltura = $_GET["jucaAltura"];
    $crescimentoChico = $_GET["crescimentoChico"];
    $crescimentoJuca = $_GET["crescimentoJuca"];

    $anos = 0;

    while ($chicoAltura >= $jucaAltura) {
        $chicoAltura = $chicoAltura + $crescimentoChico;
        $jucaAltura = $jucaAltura + $crescimentoJuca;
        $anos++;
    }

    print("Serao necessários ".$anos. " anos para Juca ser maior que Chico.");
?>