<?php
  /** ENUNCIADO EJERCICIO 6 TP REPETITIVAS
    Ingresar dos (2) números a y b, y retornar la suma de los números impares naturales que hay entre ellos. Utilizar la instrucción PARA.
    Ejemplo 1)
    a=4 b= 12, el cálculo es 5+7+9+11  y la salida es: 32
      NRO MAXIMO: 4
      NRO MAXIMO: 12
      LA SUMA ES: 32

    Ejemplo 2)
    a=35 b= 41, el cálculo es 37+39  y la salida es: 76
      NRO MINIMO: 35
      NRO MAXIMO: 41
      LA SUMA ES: 76

    Pseudocodigo:

    ALGORITMO sumaImpares
      ENTERO minimo, maximo, suma

      ESCRIBIR("NRO MINIMO: ")
      LEER(minimo)
      ESCRIBIR("NRO MAXIMO: ")
      LEER(maximo)

      // El numero maximo no se toma para la suma como lo indica el ejemplo 2 del enunciado. Tampoco el minimo por eso +1.
      PARA i <- minimo+1 HASTA maximo PASO 1 HACER
        SI i MODULO 2 <> 0 ENTONCES
          suma = suma + i
        FIN SI
      FIN PARA

      ESCRIBIR("LA SUMA ES: ", suma)
    FIN ALGORITMO
  */

/** 
 * Suma de números impares naturales que hay entre dos numeros ingresados por un usuario.
 * 
 * Variables de ingreso:
 * @var minimo INT
 * @var maximo INT
 * 
 * Acumulador a mostrar en pantalla:
 * @var suma INT
*/

$minimo = 0;
$maximo = 0;
$suma = 0;

echo "NRO MINIMO: ";
$minimo = trim(fgets(STDIN));

echo "NRO MAXIMO: ";
$maximo = trim(fgets(STDIN));

// El numero maximo no se toma para la suma como lo indica el ejemplo 2 del enunciado. Tampoco el minimo por eso +1.
for ($i=$minimo+1; $i < $maximo; $i++) { 
  if ($i%2 != 0) { // Chequea impar
    $suma += $i;
  }
}

echo "LA SUMA ES: $suma";