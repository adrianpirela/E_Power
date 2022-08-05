<?php 
		
	include 'conexion.php';
	

	$idmarca = $_POST["idmarca"];
	
	$sql = "delete from marca where idmarca = '$idmarca';";
	$inst = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) > 0) {
		header("Location: ./../completado.php");
	}else{
		header("Location: ./../error.php");
	}

	mysqli_close($con);

 ?>