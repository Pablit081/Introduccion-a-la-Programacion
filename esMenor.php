<?php
//*Determina que hora, expresada en segundos, es menor*//
//*@param INTEGER $hora1, $hora2, RETURN BOOLEAN $respuesta*//
//* BOOLEAN $respuesta*//

function esMenor ($hora1, $hora2) {
    if($hora1 < $hora2) {
        $respuesta = true;
    } else {
        $respuesta = false;
    }
    return $respuesta;
}