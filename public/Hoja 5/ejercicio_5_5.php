<!DOCTYPE html>
<html>
<head>
	<title>Producto Matrices</title>
</head>
<body>


	<?php

	function productoMatrices(){

		$matriz1 = [];
		$matriz2 = [];
		$matrizResultado = [];

		echo 'Primera matriz: <br>';

		for ($i=0; $i < 3; $i++) { 
			
			for ($j=0; $j < 3; $j++) { 
				$matriz1[$j][$i] = rand(1,3);
				echo $matriz1[$j][$i] . " ";
			}

			echo '<br>';
		}

		echo '<br>Segunda matriz: <br>';

		for ($i=0; $i < 3; $i++) { 
			
			for ($j=0; $j < 3; $j++) { 
				$matriz2[$j][$i] = rand(1,3);
				echo $matriz2[$j][$i] . " ";
			}

			echo '<br>';
		}

	echo '<br>';
	
	for ($i=0; $i < 3; $i++) {

		$producto = 0; 

		for ($m=0; $m < 3; $m++) { 

			$producto += $matriz1[$m][0] * $matriz2[$i][$m];
		}

		$matrizResultado[$i][0] = $producto;
	}

	echo '<br>';


	for ($i=0; $i < 3; $i++) {

		$producto = 0; 

		for ($m=0; $m < 3; $m++) { 

			$producto += $matriz1[$m][1] * $matriz2[$i][$m];
		}

		$matrizResultado[$i][1] = $producto;
	}

	echo '<br>';

		for ($i=0; $i < 3; $i++) {

		$producto = 0; 

		for ($m=0; $m < 3; $m++) { 

			$producto += $matriz1[$m][2] * $matriz2[$i][$m];
		}

		$matrizResultado[$i][2] = $producto;
	}


	echo 'Producto de matrices<br>';

	for ($i=0; $i < 3; $i++) { 
		
		for ($j=0; $j < 3; $j++) { 
			echo $matrizResultado[$j][$i] . " ";
		}

		echo '<br>';
	}

}

productoMatrices();

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>

</body>
</html>

