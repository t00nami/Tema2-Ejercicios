<?php

function descomponer($numero){

	echo $numero . '<br>';

	do {

		$numero = $numero / 2;
		echo $numero . '<br>';
		$resultado2 = $numero % 2;

		if($resultado2)
		echo $resultado2  . '<br>';
		

	} while ($resultado2 != 1);
}

descomponer(5);

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
