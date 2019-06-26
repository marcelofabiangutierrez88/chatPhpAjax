<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";

$basededatos="appchat";

$conexion = new mysqli($servidor, $usuario, $password, $basededatos);

function formatearFecha($fecha){
	return date ('g:i a', strtotime($fecha));
}


 ?>