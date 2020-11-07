<?php

    $salarioBruto = $_GET["salarioBruto"];
    $valorPrestacao = $_GET["valorPrestacao"];

    if ($valorPrestacao <= ($salarioBruto * 0.30)) {
        print("Seu emprestimo poderah ser concedido!");
    } else {
        print("Voce nao podera obter o emprestimo.");
    }
?>