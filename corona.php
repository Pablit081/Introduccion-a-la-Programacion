<?php
include "superficieCorona.php";
    echo "Ingrese el radio menor"."\n";
    $radio1 = trim (fgets(STDIN));
    echo "Ingrese el radio mayor"."\n";
    $radio2 = trim (fgets(STDIN));
    $area = superficieCorona($radio1, $radio2);
    echo "El area de la corana es ".$area." cm2"."\n";
?>