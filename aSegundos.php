<?php
function aSegundos( $hs, $min, $seg, $tipo) {
    $segundos = $hs * 3600 + $min * 60 + $seg;
    if($tipo == "PM") {
        $hs = $hs + 12;
    } elseif ($tipo == "AM") {
        
    $segundos = $hs*3600 + $min*60 + $seg;
    }
    return $segundos;
}