<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Cuadro y Cubo</title>

<style type="text/css">
	
	table{
		text-align: center;
		margin: auto;
		border-collapse: collapse;
	}

	table td{
		border:2px solid black;
		padding: 5px;
	}


</style>

</head>
<body>

</body>
</html>

<?php

$numero = 5 ?>

<table>

<?php
for ($i=$numero+1; $i <= $numero+5; $i++): ?>
<tr><td><?php echo 'Numero ' . $i ?></td><td><?php echo "Cuadrado: " . pow($i,2) ?></td><td><?php echo "Cubo: " . pow($i,3) ?></td></tr>	
<?php endfor; ?>

</table>


<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>