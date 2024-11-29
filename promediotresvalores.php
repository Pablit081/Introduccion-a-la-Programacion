<?php
    //*Muestra el promedio de 3 valores*//
    // FLOAT $nota1 $nota2 $nota3 $prom //
    
    echo "Ingrese la primera nota: ";
    $nota1 = trim(fgets(STDIN));
    echo "Ingrese la segunda nota: ";
    $nota2 = trim(fgets(STDIN));
    echo "Ingrese la tercera nota: ";
    $nota3 = trim(fgets(STDIN));
    $prom = ($nota1 + $nota2 + $nota3) / 3;
    echo "El promedio de las notas es: " . $prom;
?>