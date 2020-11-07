<?php

$palavra = $_GET["palavra"];

for ($altura=0; $altura < 5 ; $altura++) { 
    for ($espaco=5-1; $espaco > 0 ; $espaco--) { 
    print(" ");
    }

    for ($tamanho=0; $tamanho <= $altura ; $tamanho++) { 
    print(" ".$palavra);
    }
    print("<br>");
}
?>