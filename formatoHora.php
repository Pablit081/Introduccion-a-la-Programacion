<?php
//**recibe una cantidad de segundos y retorna el tiempo formateado en hh:mm:ss*//
//* INTEGER $horas $minutos, $segundos retorna STRING %hhmmss*//
function formatoHora($segundos) {
    $horas = (INT)($segundos / 3600);
    $minutos = (($segundos / 3600)-$horas)*60;
    $segundos = ($minutos - (INT)($minutos))*60;
    $hhmmss = $horas . "hh:" . (INT)($minutos) . "mm:" . ceil($segundos) . "ss";
    return $hhmmss;
}