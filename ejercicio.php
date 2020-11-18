<?php
	
	$archivo = fopen("contaux.txt", "r");

	while (!feof("$archivo"))
	{
		$linea = fgets($archivo);
		$datos = explode("-", $linea);

		echo $datos[0];

	}

fclose($archivo);
	 

?>