<?php

function sumaIndices(){

	$matriz = [];

	for ($i=0; $i < 4; $i++) { 

		$indice = 0;
			
		for ($j=0; $j < 7; $j++) { 
			$matriz[$i][$j] = rand(1,9);
			$indice += $matriz[$i][$j];
			echo $matriz[$i][$j];
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
