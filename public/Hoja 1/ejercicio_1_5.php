<?php

$anyo = $_POST["anyo"];
$edad = $_POST["edad"];

$anyoComparacion = 2020;

$restoAnyo = $anyoComparacion - $anyo;

$resultado = $edad + $restoAnyo;

echo "Tu edad en el año $anyoComparacion será de: $resultado";


?>
<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
