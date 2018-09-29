<?php

$fecha = $_POST['fecha'];

$tiempo = strtotime($fecha);

$actual = time();
$edad = ($actual-$tiempo)/(60*60*24*365.25);
$edad = floor($edad);

echo 'Tú edad es de ' . $edad . ' años'

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
