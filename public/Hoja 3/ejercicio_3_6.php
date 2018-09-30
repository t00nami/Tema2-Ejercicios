<?php

function contar($texto){

	$blanco = substr_count($texto, " ");
	$digitos = preg_match_all('/\d/', $texto);
	$letras = preg_match_all("/[a-zA-ZÀ-ÖØ-öø-ÿ]/", $texto);
	$lineas = substr_count($texto, "<br>");
	$caracteres = preg_match_all("/./", $texto);

	echo 'Caracteres en blanco: ' . $blanco . '<br>';
	echo 'Cantidad de números: ' .$digitos . '<br>';
	echo 'Cantidad de letras: ' .$letras . '<br>';
	echo 'Número de lineas: ' .$lineas . '<br>';
	echo 'Número total de caracteres: ' .$caracteres;

}

$texto = 'Ho23la mu n2do<br>';
contar($texto)

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
