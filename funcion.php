<?php
function expresiones($mensaje) {
	$mensaje = str_replace(":)",'<img src="img/feliz.png">', $mensaje);
	$mensaje = str_replace(":(",'<img src="img/triste.png">', $mensaje);
	$mensaje = str_replace(":P",'<img src="img/lengua.png">', $mensaje);
	
	$mensaje = str_replace(":)",'<img src="img/feliz.png">', $mensaje);
	$mensaje = str_replace(":(",'<img src="img/triste.png">', $mensaje);
	$mensaje = str_replace(":p",'<img src="img/lengua.png">', $mensaje);
	return $mensaje;
}
?>