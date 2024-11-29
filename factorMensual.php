<?php
    function factorMensual ($mes) {
        if ($mes == "enero" || $mes == "febrero" || $mes == "marzo") {
            $factor = 15;
        }
        elseif ($mes == "abril" || $mes == "mayo" || $mes == "junio") {
            $factor = 17;
        }
        elseif ($mes == "julio" || $mes == "agosto") {
            $factor = 19;
        }
        elseif ($mes == "septiembre" || $mes == "octubre" || $mes == "noviembre") {
            $factor = 20;
        }
        else {
            $factor = 21;
        }
        return $factor;
    }
?>