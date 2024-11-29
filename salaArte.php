<?php
include "calcularPrecio.php";
include "calcularSuperficie.php";
echo "Ingrese el largo del cuadro: "."\n";
 $largo = trim(fgets(STDIN));
 echo "Ingrese el ancho del cuadro: "."\n";
 $ancho = trim(fgets(STDIN));
 echo "Ingrese el precio base del cuadrado: "."\n";
 $precioBase = trim(fgets(STDIN));
 echo "Ingrese la clasificación del cuadrado: "."\n";
 $clasificacion = trim(fgets(STDIN));
 $superficie = calcularSuperficie($ancho, $largo);
 $precio = calcularPrecio($superficie, $precioBase, $clasificacion);
 echo "El precio del cuadro es: " . $precio."\n";
 ?>