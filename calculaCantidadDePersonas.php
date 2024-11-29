<?php
    //*Calcula la cantidad de personas que asistieron a un casamiento.*//
    //*INT $solteros, $total, $mujeres, $casados*//    
    echo "Ingrese la cantidad de varones solteros que asistieron: "."\n";
    $solteros = trim(fgets(STDIN));     
    $total = (INT)($solteros *15/2);
    $mujeres = (INT)($total*2/3);
    $casados = (INT)($total*1/5);     
    echo "La cantidad total de personas que asistieron al casamiento fueron: ".$total." personas, de las cuales ".$mujeres." fueron mujeres, ".$casados." fueron hombres casados y ".$solteros." fueron solteros.";;
?>