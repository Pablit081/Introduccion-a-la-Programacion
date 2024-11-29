<?php
    include "esMenor.php";
    include "esPar.php";
    $suma=0;
    $aux=0;
    echo "Ingrese un número"."\n";
    $numA = trim(fgets(STDIN));
    echo "Ingrese otro número"."\n";
    $numB = trim(fgets(STDIN));
    $rtaMenor=esMenor($numA,$numB);
    if ($rtaMenor==true) {
        $rtaPar=esPar($numA);
        if ($rtaPar==true){
            $aux=$numA+1;
        }
        else {
            $aux=$numA+2;
        }
        for ($i=$aux;$i<$numB;$i=$i+2) {
            $suma=$suma+$i;
        }
        echo "La suma de los números impares entre ".$numA." y ".$numB." es: ".$suma."\n";
    }
    else {
        $rtaPar=esPar ($numB);
        if ($rtaPar==true){
            $aux=$numB+1;
        }
        else {
            $aux=$numB+2;
        }
        for ($i=$aux;$i<$numA;$i=$i+2) {
            $suma=$suma+$i;
        }
        echo "La suma de los números impares entre ".$numB." y ".$numA." es: ".$suma."\n";
    }
?>