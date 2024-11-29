<?php
include "esPar.php";
    echo "Ingrese un número entero: "."\n";
    $num = trim(fgets(STDIN));
    if (esPar($num)) {
        echo ("El número ". $num . " es PAR."."\n");
    }
    else {
        echo ("El número ". $num . " es IMPAR."."\n");
    }
?>