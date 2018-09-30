<?php

function repeticiones($cadena1,$cadena2){



	$repeticiones = substr_count($cadena1, $cadena2);



	echo 'El número de repeticiones del substring "' . $cadena2 . '" en "' . $cadena1 . '" es de: ' . $repeticiones;

}

$cadena1 = "hola mundo hola hola mundo";
$cadena2 = "hola";

repeticiones($cadena1,$cadena2);

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
