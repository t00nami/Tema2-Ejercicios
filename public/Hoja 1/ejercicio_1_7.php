<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Tabla de multiplicar</title>

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

$numero = $_POST['numero'] ?>

<table>

<?php
for ($i=0; $i <= 10; $i++): ?>
<tr><td><?php echo $numero . ' x ' . $i . ' = ' ?></td><td><?php echo $numero*$i ?></td></tr>	
<?php endfor; ?>
</table>


<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
