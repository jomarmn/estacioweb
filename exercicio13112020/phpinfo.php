<?php
    $chave = md5("factor");

    $senha = "123mudar";

    //echo $senha;

   //echo md5($senha);

    //echo md5($chave.$senha);


    echo "123mudar:".$senha;
    echo "hash:".md5($senha);
    echo "hashTratado".md5($chave.$senha);

?>