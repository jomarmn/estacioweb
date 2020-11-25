<?php

$valor = calculaCerveja(10,5);
print($valor);

function calculaCerveja($qtd, $valor=4.0){
    return $qtd * $valor;
}

$valorAula;

if(empty($valorAula)){
    $valorAula = 100.00;
}

?>