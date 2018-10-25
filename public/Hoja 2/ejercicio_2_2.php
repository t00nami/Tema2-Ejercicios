<?php



$a = 8;
$b = 3;
$c = 5;
$d = -1;
$e = 7;
$f = 9;

$x = ($c*$e-$b*$f)/($a*$e-$b*$d);
$y = ($a*$f-$c*$d)/($a*$e-$b*$d);

if (($a*$x+$b*$y) == $c){
	echo 'El resultado es: ' . $x;
}else{
	echo 'No hay solución';
}

echo "<br>";

if (($d*$x+$e*$y) == $f){
	echo 'El resultado es: ' . $y;
}else{
	echo 'No hay solución';
}

?>
<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
