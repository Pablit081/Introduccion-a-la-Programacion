<?php
    function CostTotal ($unCosto , $unSecado , $unPlanchado){
            $total=$unCosto;
            if ($unSecado == "s") {
                $total=$total+2500;
            }
            if ($unPlanchado == "s") {
                $total=$total+3500;
            }    
            return $total;
        }
?>
