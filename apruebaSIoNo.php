<?php
include "esMayorDe4.php";
    echo "Ingrese su nota"."\n";
    $nota = trim(fgets(STDIN));
    if ($nota >= 0 && $nota <= 10) {
        if (esMayorDe4($nota)) 
            echo "Aprobó"."\n";
        else {
            echo "Desaprobó"."\n";
        }
        }
    else {
        echo "Nota inválida"."\n";
    }
?>