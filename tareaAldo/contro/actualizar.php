<?php 
	require_once '../conex/conexiones.php';

	$id = $_POST['id'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$mail = $_POST['email'];
	echo "$id";

	$editar_query = "UPDATE users set user='$user',pass='$pass',mail='$mail' WHERE id=".$id;


	$registro_object = $conexion->query($editar_query);

	header("Location: ./../index.php");
 ?>