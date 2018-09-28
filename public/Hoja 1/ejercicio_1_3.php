<?php

$radio = 2.5;

$longitud = round((2 * pi() * $radio),4);

$area = round((pow(pi(),2)),4) * $radio; 

echo "Dada una circunferencia de radio $radio cm<br>";
echo "La longitud de la circunferencia es $longitud cm<br>";
echo "El area de la circunferencia es: $area cm2";

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
