<?php

function traspuesta(){

	$matriz = [];
	$matrizTraspuesta = [];

	for ($i=0; $i < 4; $i++) { 

		$indice = 0;

		for ($j=0; $j < 4; $j++) { 
			$matriz[$i][$j] = rand(0,9);
			$indice += $matriz[$i][$j];
			echo $matriz[$i][$j];
		}

		echo '<br>';
	}

	echo 'Matriz traspuesta:<br>';



	for ($i=0; $i < 4; $i++) {

		for ($j=0,$m=0,$k=0; $k < 4; $k++,$j++) {
			$matrizTraspuesta[$k][$m] = $matriz[$i][$j];
			echo $matrizTraspuesta[$k][$m];
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
