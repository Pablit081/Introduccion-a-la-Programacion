<?php
    $suma=0;
    echo "Cuantos números desea sumar?"."\n";
    $limite=trim(fgets(STDIN));
    for ($i=1; $i<=$limite; $i++) {
        $suma=$suma+$i;
    }
    echo "La suma de los primeros ".$limite. " números naturales es: " . $suma . "\n";
?>