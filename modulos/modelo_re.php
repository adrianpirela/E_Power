<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
    $descripcion = $_POST["descripcion"];
    $idmarca = $_POST["idmarca"];
	
	//validar
	

	if (mysqli_num_rows($inst1) < 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into modelo values (null,'$descripcion','$idmarca');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../completado.php");
	}
	

 ?>