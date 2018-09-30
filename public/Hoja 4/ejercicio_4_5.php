<?php

function ordenInverso($cadena){

	$arrayCadena = explode(" ", $cadena);
	$numerosInvertidos = "";

	for ($i=0; $i < count($arrayCadena); $i++) { 
		
		if(preg_match_all("/[\d]/", $arrayCadena[$i])){
			$numerosInvertidos .= $arrayCadena[$i];
		}
	}

	echo 'Los números introducidos en el string sin invertir son: ' . $numerosInvertidos;
	echo '<br>';
	$numerosInvertidos = strrev($numerosInvertidos);
	echo 'Los números introducidos en el string en orden inverso son: ' . $numerosInvertidos;

}

ordenInverso(" numero 1 numero 2 numero 3 numero 4 numero 5 numero 6");

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
