<?php

function calculaTiempo($tiempo){

	$arrayTiempo = preg_split("/[:]/", $tiempo);

	$segundos = $arrayTiempo[2] + ($arrayTiempo[1]*60) + ($arrayTiempo[0]*60*60);

	return $segundos;
}

$tiempo = "01:40:50";
$tiempo2 = "01:00:00";

$tiempo1Calculado = calculaTiempo($tiempo);
$tiempo2Calculado = calculaTiempo($tiempo2);
$resultado = $tiempo1Calculado - $tiempo2Calculado;

echo 'La diferencia de segundos entre ' . $tiempo . ' y ' . $tiempo2 . ' es de: ' . $resultado . ' segundos';

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
