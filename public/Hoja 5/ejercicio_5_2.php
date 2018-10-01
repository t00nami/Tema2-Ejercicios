<?php

function cribaErastotenes(){

	$limite=100;
	$numeros = [];

	for($i=0;$i<$limite;$i++){
		$numeros[]=true;
	}


	for ($j=2;$j<$limite;$j++){

			for ($i=$j*$j;$i<$limite;$i+=$j){
				$numeros[$i] = false;
			}	
	}

	echo "Primos: ";
	for ($n = 2; $n < $limite; $n++){

		if ($numeros[$n]){
			echo $n . " ";
		}
	}
}

cribaErastotenes();


?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
