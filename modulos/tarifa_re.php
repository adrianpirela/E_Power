<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	$idmarca = $_POST["idmarca"];
    $monto = $_POST["monto"];
	
	//validar
	

	if (mysqli_num_rows($inst1) < 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into tarifa values (null,'$idmarca','$monto');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../index.php?pag=tarifa");
	}
	

 ?>