<?php
    $suma=0;
    $sueldo=0;
    $cant=0;
    $promedio=0;
    echo "Desea ingresar un sueldo? s/n"."\n";
    $rta = trim(fgets(STDIN));
    while ($rta == "s") {
    echo "Ingrese un sueldo"."\n";
    $sueldo = trim(fgets(STDIN));
    $suma=$suma+$sueldo;
    $cant=$cant+1;
    echo "Desea ingresar un sueldo"."\n";
    $rta = trim(fgets(STDIN));
    }
    $promedio = $suma/$cant;
    echo "El sueldo promedio de los ".$cant." sueldos es ".$promedio;
?>