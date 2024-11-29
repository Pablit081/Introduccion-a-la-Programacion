<?php
include "extraeCentena.php";
include "extraeDecena.php";
include "extraeUnidad.php";
    echo "Ingrese un numero"."\n";
    $num = trim(fgets(STDIN));
    $cifra1 = extraeCentena($num);
    $cifra2 = extraeDecena($num);
    $cifra3 = extraeUnidad($num);
    echo "Cifra centena: ".$cifra1."\n";
    echo "Cifra decena: ".$cifra2."\n";
    echo "Cifra unidad: ".$cifra3."\n";
    if ($num >= 100 && $num <= 999) {
        if ($cifra1 <> $cifra3) 
            echo "El numero NO es capicua"."\n";
        else {
            echo "El numero SI es capicua"."\n";
        }
    }
    else {
        echo "El numero no es un numero de tres cifras"."\n";
    }      
?>