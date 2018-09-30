<?php

function numeroEntero($i, $j){

 $numero = 100;

 for ($k=1; $k <= $numero; $k++) {

 	if ($k%$i == 0 && $k%$j == 0){
 		echo $k . '<br>';
 	} 
 }

}

numeroEntero(3,87);

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
