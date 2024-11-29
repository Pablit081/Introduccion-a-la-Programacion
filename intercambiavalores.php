<?php
    //*Intercambio los valores de dos variables*//
    //*INT $valor1, $valor2, $aux*//
    echo "Ingrese el primer valor: "."\n";
    $valor1 = trim(fgets(STDIN));
    echo "Ingrese el segundo valor: "."\n";
    $valor2 = trim(fgets(STDIN));    
    $aux = $valor1;
    $valor1 = $valor2;
    $valor2 = $aux;
    echo "El primer valor ahora es: ". $valor1. "\n";
    echo "El segundo valor ahora es: ". $valor2;
?>