<?php

function cifrado($texto,$numero){

	$caracteres = str_split(strtoupper($texto));

	for ($i=0; $i < count($caracteres); $i++) {


		if (preg_match_all('/[ ,\.]/', $caracteres[$i]) == 1 ){
			continue;
		}
			
			$codigo = ord($caracteres[$i]);
			$codigo = $codigo + $numero;

			if ($codigo > 90){
				$codigo = $codigo - 90;
				$codigo = 64 + $codigo;
			}

			$letraCambiada = chr($codigo);
			$caracteres[$i] = $letraCambiada;
		
	}

	$textoCodificado = implode("", $caracteres);
	$textoCodificado = str_replace(" ", "", $textoCodificado);
	$textoCodificado = str_replace(",", "", $textoCodificado);
	echo 'El texto ' . $texto . ' cifrado es: ' . $textoCodificado;
}

cifrado("UN TEXTO, y algo MAS",1);

?>

<br>
<br>
<br>
<a href="../index.php">Regresar al menú</a>
