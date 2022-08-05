<?php 

	//abrir la conexión
	include("conexion.php");
	session_start();
	//recibir variables
	
    $marca_pre = $_POST["marca_pre"];
    $modelo_pre = $_POST["modelo_pre"];
    $placa = $_POST["placa"];
	
	//validar
	

	if (mysqli_num_rows($inst1) < 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into vehiculos values ('$placa','$modelo_pre','$marca_pre');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../completado.php");
	}
	

 ?>