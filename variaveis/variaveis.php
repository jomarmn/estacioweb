<?php
    //booleano
    $acesa = FALSE;
    
    if($acesa)
    {
        print("Primeiro IF, Acesa");
    }
    
    $acesa = TRUE;
    if ($acesa) 
    {
        print("Segundo IF, Acesa");
    }
    echo "<br/>";
    //inteiros
    $variavelInteira = -1234;

    echo $variavelInteira;
    echo "<br/>";
    
    //ponto flutuante
    $notaAvUm = 4.5;
    $notaAvDois = 9.5;
    echo $notaAvUm + $notaAvDois;
    echo "<br/>";
    
    //string
    $listacpf = array("fuji" => "013046", "kaio" => "754858");
    echo $listacpf["fuji"];
    echo "<br/>";

    echo $listacpf["kaio"];

?>