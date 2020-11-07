<?php

    $livro = $_GET["livro"];
    $usuario = $_GET["usuario"];

     
    if ($usuario == "professor") {
        print("O ".$usuario. " tem dez dias para devolver o livro ".$livro);
    } else {
        print("O ".$usuario. " tem três dias para devolver o livro ".$livro);
    }
?>