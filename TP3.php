<?php
    /*define si una persona es mayor de edad */
    /* boolean $esMayor INTEGER $edad STRING $nombre $mensaje*/

   echo ("Ingrese su nombre: ");
   $nombre=(trim(fgets(STDIN)))."\n";
   echo ("Ingrese su edad: ");
   $edad=(trim(fgets(STDIN)))."\n";
   $esMayor= $edad>=18;
   $mensaje= $esMayor? $nombre." es mayor de edad":$nombre." es menor de edad";
   echo $mensaje;
