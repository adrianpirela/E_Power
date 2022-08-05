<?php 
		
	include 'conexion.php';
	

	$idmodelo = $_POST["idmodelo"];
	
	$sql = "delete from modelo where idmodelo = '$idmodelo';";
	$inst = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) > 0) {
		header("Location: ./../completado.php");
	}else{
		header("Location: ./../error.php");
	}

	mysqli_close($con);

 ?>