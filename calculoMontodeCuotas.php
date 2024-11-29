<?php
    //*Calcula y muestra el monto que debe abonar cada cuota con su respectivo interés*//
    //*INT $canCuotas, FLOAT $cuota, $monto, $interes*//
    echo "Ingrese el monto de dinero: ". "\n";
    $monto = trim(fgets(STDIN));
    echo "Ingrese la cantidad de cuotas: ". "\n";
    $canCuotas = trim(fgets(STDIN));
    echo "Ingrese los intereses que se van a aplicar (%): ". "\n";
    $interes = trim(fgets(STDIN));
    $cuota = $monto/$canCuotas + ($monto/$canCuotas)*$interes/100;
    echo "El monto que debe abonar cada cuota con su respectivo interés es: $" . $cuota;
?>