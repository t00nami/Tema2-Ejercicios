<?php

function sumaIndices(){

	$matriz = [];

	for ($i=0; $i < 7; $i++) { 

		$indice = 0;
			
		for ($j=0; $j < 4; $j++) { 
			$matriz[$j][$i] = rand(1,9);
			$indice += $matriz[$j][$i];
			echo $matriz[$j][$i] . " ";
		}

		echo '<br>';
		echo 'La suma de los valores del indice número: ' . $i . ' es igual a: ' . $indice;
		echo '<br>';
	}
	
}

sumaIndices();

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
