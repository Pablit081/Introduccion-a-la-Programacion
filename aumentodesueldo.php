<?php
    //*Algoritmo PorcentageAumento*//
    //*Calcula y muestra % de aumento salarial*//
    //*FLOAT $inicial, $deseado, $aumento*//

    echo "Ingrese el sueldo inicial:\n";
    $inicial = trim(fgets(STDIN));
    echo "Ingrese el sueldo deseado:\n";
    $deseado = trim(fgets(STDIN));
    $aumento = ( $deseado * 100 / $inicial) - 100;
    echo "El porcentaje de aumento es % " . $aumento;
?>
