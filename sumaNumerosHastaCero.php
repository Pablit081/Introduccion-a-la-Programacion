<?php
    $suma=0;
    do {
        echo "Ingrese un número"."\n";
        $num = trim(fgets(STDIN));
        $suma = $suma + $num;
    } while ($num!=0);
    echo "La suma de todos los números ingresados es: " . $suma . "\n";
?>