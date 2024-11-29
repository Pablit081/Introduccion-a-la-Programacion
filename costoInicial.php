<?php
    function costoInicial ($unaRopa,$unPeso) {
        $ini=0;
        if ($unPeso<=5) {
            if ($unaRopa == "Clara") {
                $ini=4200;
            }
            elseif ($unaRopa == "Oscura") {
                $ini=4000;
            }
            else {
                $ini=4800;
            }
        }
        else {
            if ($unaRopa == "Clara") {
                $ini=5000;
            }
            elseif ($unaRopa == "Oscura") {
                $ini=4800;
            }
            else {
                $ini=6000;
            }
        }
        return $ini;
    }
    
?>