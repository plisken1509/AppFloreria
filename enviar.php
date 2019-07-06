<?php 
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];
	$destinatario="pliskenpl@hotmail.com";
	$asunto=$_POST['asunto'];

	$carta = "De: $nombre \n";
	$carta = "Correo: $correo \n";
	$carta = "telefono: $telefono \n";
	$carta = "Correo: $mensaje \n";

	mail($destinatario, $asunto, $mensaje);
	alert("Envio Correcto!");
?>