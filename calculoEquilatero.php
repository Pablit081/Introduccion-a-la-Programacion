<?php

include "perimetroEquilatero.php";
include "alturaEquilatero.php";
include "areaEquilatero.php";
    echo "Ingrese cunato mide el lado del triangulo equilatero en cm (tipo entero)"."\n";
    $lado = trim(fgets(STDIN));
    $perimetro = perimetroEquilatero($lado);
    $altura = alturaEquilatero($lado);
    $area = areaEquilatero($lado);
    echo "Dado un triangulo equilatero de lado ".$lado." cm, su perimetro es de ".$perimetro." cm, su al atura es de ".$altura." y su area es de ".$area." cm2"."\n";
?>