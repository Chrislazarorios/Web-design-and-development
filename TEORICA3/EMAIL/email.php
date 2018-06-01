<?php

function enviarMail($asunto,$mensaje,$mailUsuario)
{
	// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
	$mensaje = wordwrap($mensaje, 70, "\r\n");

	// Enviarlo
	mail($mailUsuario, $asunto, $mensaje); 	
} 

?>