<?php
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$percAume = $_POST["percAumen"];
$novoSal = $salario + ($salario*($percAumen/100));
echo"O salario de " .$nome. "com aumento eh de R$" .$novoSal;
?>