<?php
    echo "Ingrese un numero Natural"."\n";
    $num = trim(fgets(STDIN));
    for ($i=2; $i<=$num; $i++) {
        if ($i%2 == 0) {
            echo $i."\n";
        }
    }
    echo "Fin del programa"."\n";
?>