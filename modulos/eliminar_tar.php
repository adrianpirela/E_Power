<?php 
		
	include 'conexion.php';
	

	$id = $_POST["id"];
	
	$sql = "delete from tarifa where id = '$id';";
	$inst = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) > 0) {
		header("Location: ./../completado.php");
	}else{
		header("Location: ./../error.php");
	}

	mysqli_close($con);

 ?>