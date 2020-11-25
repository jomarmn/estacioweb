<?php

$idade = $_GET['idade'];
 
if($idade<18){
    header("Location: http://www.rihappy.com.br");
} else {
    header("Location: http://www.tatame.com.br");
}


?>