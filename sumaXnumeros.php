<?php
    $suma=0;
    echo "Cuantos números desea ingresar?"."\n";
    $limite=trim(fgets(STDIN));
    for ($i=1; $i<=$limite; $i++) {
        echo "Ingrese un número"."\n";
        $num = trim(fgets(STDIN));
        $suma=$suma+$num;
    }
    echo "La suma de todos los ".$limite. " números ingresados es: " . $suma . "\n";
?>