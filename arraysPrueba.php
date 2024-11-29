<?php
// Enter your code here, enjoy!
function main (){
/*entero $a, decimal $r, boolean $v, String $m*/
	$arregloDelMain = armarArreglo();
	mostrarArreglo($arregloDelMain); 

}

function armarArreglo(){
	/*usamos una repetitiva para pedirle los datos al usuario*/
	echo ("cuantos items desea ingresar? "); 
	$n = trim(fgets(STDIN));
	$arreglo = [];
	for ($i = 0; $i < $n; $i++) {
		 // cargar
		 echo("ingresar valor"."\n"); 
		 $arreglo[$i] = trim(fgets(STDIN)); 
	}
	return $arreglo;
}

function mostrarArreglo ($elArreglo){
	$n = count($elArreglo);
	for ($i = 0; $i < $n; $i++) {
		 // mostrar
		 echo $elArreglo[$i]; 
	}
}

//llamada principal 
main();
?>
