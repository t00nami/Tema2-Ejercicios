<?php

function numeroEntero($i, $j){

 $numero = 100;

 for ($k=1; $k <= $numero; $k++) {

 	if ($i%$k == 0 && $j%$k == 0){
 		echo $k . '<br>';
 	} 
 }

}

numeroEntero(10,20);

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
