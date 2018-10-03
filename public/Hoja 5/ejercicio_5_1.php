<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5.1</title>

	<style>

		table{
			border-collapse: collapse;
			margin: auto;
			margin-top: 20px;
		}
		
		table td{
			border:2px solid black;
		}


	</style>

</head>
<body>

	<?php

variosCalculos();

function variosCalculos(){

	$arrayNumeros = [];

	for ($i=0; $i < 20; $i++) { 
		$numeroAleatorio = rand(0,10);
		$arrayNumeros[] = $numeroAleatorio;
	}

	for ($i=0; $i < count($arrayNumeros); $i++) { 
		$sumaArray += $arrayNumeros[$i];
	}

	echo 'La media de los números del array es de: ' . $sumaArray/20;

	sort($arrayNumeros);

	echo '<br>El array de números ordenados es: ';
	foreach ($arrayNumeros as $numeros) {
		echo $numeros;
	}

?>

<table>
	<tr><td>Número</td><td>Repeticiones</td></tr>

<?php

	$arrayContado = array_count_values($arrayNumeros);

	foreach ($arrayContado as $key => $value) {
		echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
	}

}

?>

</table>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>

</body>
</html>

