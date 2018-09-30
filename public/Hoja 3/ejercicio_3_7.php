<?php

function comprobarTexto($texto){

	$remplazo1 = str_replace(" ", "", strrev($texto)) . '<br>';
	$remplazo2 = str_replace(",", "", $remplazo1);
	$rempladoOriginal = str_replace(" ", "", $texto) . '<br>';
	$rempladoOriginal2 = str_replace(",", "", $rempladoOriginal);

	$remplazoMayus1 = strtolower($remplazo2);
	$remplazoMayus2 = strtolower($rempladoOriginal2);

	if ($remplazoMayus1 == $remplazoMayus2){
		echo 'El texto pasado es un palíndromo';
	}else{
		echo 'El texto pasado no es un palíndromo';
	}

}

comprobarTexto("Yo dono rosas, oro no doy");


?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
