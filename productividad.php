<?php
include "factorMensual.php";
    echo "Ingrese el mes"."\n";
    $mes = trim(fgets(STDIN));
    echo "Cuantos articulos se produjeron?"."\n";
    $articulos = trim(fgets(STDIN));
    $productividad = factorMensual($mes)*$articulos;
    echo "La productividad del mes de ".$mes." ha sido: ".$productividad."\n";
?>