<?php

    $area = $_GET["area"];
    
    $qtdTinta = ($area/6);
    $latas18 = ($qtdTinta/18);
    $latas36 = ($qtdTinta/3.6);
    $custo18 = ($latas18*80);
    $custo36 = ($latas36*25);

    print("Situacao 1: Voce pode comprar ".$latas18. "lata(s) de 18 litros e o custo total sera de R$ ".$custo18."</br>"); 
    print("Situacao 2: Voce pode comprar ".$latas36. "lata(s) de 3.6 litros e o custo total sera de R$ ".$custo36);

?>