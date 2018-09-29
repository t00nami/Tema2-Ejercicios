<?php

$m1 = 10;
$m2 = 20;

$distancia = 5;
$gravedad = 6.67 * pow(10,-11);

$resultado = $gravedad * (($m1*$m2)/pow($distancia,2));

echo "La fuerza de atracción gravitacional entre la masa $m1 y la masa $m2 con una distancia de $distancia es igual a: $resultado";

?>
<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
