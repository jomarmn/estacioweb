<?php

$numero = $_GET["numero"];
$cont = 0;

while ($numero != 0) {

    if ($numero >= 100 and $numero <=200) {
        $cont++;
    }
}
print("Foram digitados ".$cont." numeros entre 100 e 200.");

?>