<?php
    function convierteAsegundos($hs,$min,$seg) {
        $segundos = $hs * 3600 + $min * 60 + $seg;
        return $segundos;
    }
?>