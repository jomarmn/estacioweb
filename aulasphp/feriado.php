<?php
    $feriado = $_GET["feriado"];
    
    switch($feriado) {
        case "carnaval":
            echo "Feliz Carnaval!";
            break;
        case "natal":
            echo "Feliz Natal!";
            break;
        default:
            echo "Tenha um bom dia.";          
    }
?>