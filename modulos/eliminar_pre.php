<?php 
		
	include 'conexion.php';
	$email_re = $_SESSION['email_re'];
	$sql1 = "select id_registro from registros where email_re = '$email_re'";
	$inst1 = mysqli_query($con,$sql1);
	$rs1 = mysqli_fetch_array($inst1);
	$id_registro = $rs1["id_registro"];

	$idpre_renta = $_POST["idpre_renta"];
	
	$sql = "delete from pre_renta where idpre_renta = '$idpre_renta';";
	$inst = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) > 0) {
		header("Location: ./../completado.php");
	}else{
		header("Location: ./../error.php");
	}

	mysqli_close($con);

 ?>