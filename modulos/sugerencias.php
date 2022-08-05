<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $nombre_su = utf8_decode($_POST["nombre_su"]);
    $apellido_su = utf8_decode($_POST["apellido_su"]);
	$email_su = $_POST["email_su"];
	$mensaje_su = utf8_decode($_POST["mensaje_su"]);
	
	//validar
	$consulta = "select * from sugerencias where id_sugerencia = '$id_sugerencia';";
	$query = mysqli_query($con,$consulta);

	if (mysqli_num_rows($query) > 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into sugerencias values ('$nombre_su','$apellido_su','$email_su','$mensaje_su',null);";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../completado.php");
	}
	

 ?>