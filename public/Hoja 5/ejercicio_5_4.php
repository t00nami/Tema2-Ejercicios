<?php

function traspuesta(){

	$matriz = [];
	$matrizTraspuesta = [];

	for ($i=0; $i < 4; $i++) { 

		$indice = 0;

		for ($j=0; $j < 4; $j++) { 
			$matriz[$j][$i] = rand(0,9);
			$indice += $matriz[$j][$i];
			echo $matriz[$j][$i] . " ";
		}

		echo '<br>';
	}

	echo 'Matriz traspuesta:<br>';



	for ($i=0; $i < 4; $i++) {

		for ($j=0; $j < 4; $j++) {
			$matrizTraspuesta[$j][$i] = $matriz[$i][$j];
			echo $matrizTraspuesta[$j][$i] . " ";
		}
		echo '<br>';	
	}

	//Darle la vuelta a un array
	/*for ($i=0; $i < 4; $i++) { 

		for ($j=4, $k=0; $j >= 0; $j--,$k++) {
			$matrizTraspuesta[$k][$j] = $matriz[$i][$j];
			echo $matrizTraspuesta[$k][$j];
		}

		echo '<br>';
	}*/
	
}

traspuesta();

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
