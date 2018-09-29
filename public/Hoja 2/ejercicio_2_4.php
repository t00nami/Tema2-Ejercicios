<?php


$año = 2020;
$comprobacion = $año % 4;
$comprobacion2 = $año % 400;

if ((!$comprobacion && $año%100) || !$comprobacion2) {
	echo 'El año es bisiesto';
}else{
	echo 'El año no es bisiesto';
}



?>
<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
