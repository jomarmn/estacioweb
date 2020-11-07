<?php
    $nota = $_GET["nota"];

    if($nota >= 7){
        print("Parabéns! Você foi aprovado!");
        print("<P>");
    } else {
        print("Você terá que fazer aulas de recuperação");
        print("<P>");
    }

    print("Sua nota final foi ". $nota);
    print("<P>");

?>