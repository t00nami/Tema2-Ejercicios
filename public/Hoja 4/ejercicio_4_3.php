<?php


function decodificar($clave){

	$textoCodificado = 'ALEGREXIRDRVJLEKVOKFHLVTFEKZVEVKFURJCRJCVKIRJUVCRSVTVURIZFLEVAVDGCFVJTRURMVQHLVKIRSRAFWVCZODVGRXRLENYZJBP';

	$buscar = 'FELIX';

	for ($i=0; $i < strlen($textoCodificado); $i++) { 
		
		$letra = ord($textoCodificado[$i]);
		$letra = $letra - $clave;

		if ($letra < 65) {
			$codigo = 65 - $letra;
			$letra = 91 - $codigo;
		}

		$letra = chr($letra);

		$textoCodificado[$i] = $letra;
	}

	if (substr_count($textoCodificado, $buscar)){
		echo $textoCodificado;
		return true;
	}

}

$contador = 0;

while ($contador <= 25) {
	if (decodificar($contador)){
		break;
	}
	$contador++;
}

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
