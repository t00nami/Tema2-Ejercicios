<?php

function productoMatrices(){

	$matriz1 = [];
	$matriz2 = [];

	echo 'Primera matriz: <br>';

	for ($i=0; $i < 3; $i++) { 

		$indice = 1;
			
		for ($j=0; $j < 3; $j++) { 
			$matriz1[$i][$j] = rand(1,9);
			$indice *= $matriz1[$i][$j];
			echo $matriz1[$i][$j];
		}

		echo '<br>';
	}

	echo '<br>Segunda matriz: <br>';

		for ($i=0; $i < 3; $i++) { 

		$indice = 1;
			
		for ($j=0; $j < 3; $j++) { 
			$matriz2[$i][$j] = rand(1,9);
			$indice *= $matriz2[$i][$j];
			echo $matriz2[$i][$j];
		}

		echo '<br>';
	}

	echo '<br>';
	
	for ($i=0; $i < 3; $i++) { 

		$producto = 0;

		for ($j=0,$k=0; $k < 3; $k++) { 
			$producto += $matriz1[$i][$j] * $matriz2[$k][$j];
		}

			echo $producto;
			echo '<br>';
	}
	
	
}

productoMatrices();

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
