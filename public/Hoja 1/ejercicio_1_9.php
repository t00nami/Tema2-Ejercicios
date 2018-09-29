<?php

$angulo = 143.234;

$radianes = $angulo * (pi()/180);
$grados = $radianes * (180/pi());

$Cdecimales = preg_split("/[.]/", $angulo);
$decimales = (double)$Cdecimales[1];

$minutos = ($decimales * 60)/1000 ;

$Cdecimales = preg_split("/[.]/", $minutos);
$decimales = (double)$Cdecimales[1];
$segundos = ($decimales * 60)/1000 ;



echo "El número en radianes del angulo $angulo º es de: " . $radianes . ' radianes<br>';
echo "El número de grados del radian $radianes es de: " . $grados . 'º<br>';
echo "El número de minutos del radian $radianes es de: " . $minutos . ' minutos<br>';
echo "El número de segundos del radian $radianes es de: " . $segundos
*10 . ' segundos<br>';



?>
<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
