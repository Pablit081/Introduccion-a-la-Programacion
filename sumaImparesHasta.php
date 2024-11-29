<?php
    $suma=0;
    $aux=1;
    echo "Cuantos números impares desea sumar?"."\n";
    $limite=trim(fgets(STDIN));
    for ($i=1; $aux<=$limite; $i++) {
        if ($i%2<>0){
            $suma=$suma+$i;
            $aux=$aux+1;
        }
    }
    echo "La suma de los ".$limite. " primeros números impares es: " . $suma . "\n";
?>