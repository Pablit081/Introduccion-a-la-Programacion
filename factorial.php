<?php
    $prod=1;
    echo "El factorial de que número desea conocer?"."\n";
    $limite=trim(fgets(STDIN));
    for ($i=1; $i<=$limite; $i++) {
        $prod=$prod*$i;
    }
    echo "El factorial de ".$limite. " es: " . $prod . "\n";
?>