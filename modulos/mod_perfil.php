	<?php 

	include 'conexion.php';
	session_start();
	//recibir variables
	$email_re = $_SESSION['email_re'];
    $sql1 = "select id_registro from registros where email_re = '$email_re'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
    $id_registro = $rs1["id_registro"];


	 $nombre_re = utf8_decode($_POST["nombre_re"]);
    $apellido_re = utf8_decode($_POST["apellido_re"]);
    $codigo_re = $_POST["codigo_re"];
    $telefono_re = $_POST["telefono_re"];
    $tip_doc = $_POST["tip_doc"];
	$num_doc = $_POST["num_doc"];
    $direccion_re = utf8_decode($_POST["direccion_re"]);
    $pais_re = $_POST["pais_re"];
	$email_re = $_POST["email_re"];
    $contra1_re = $_POST["contra1_re"];
	$pregunta_re = utf8_decode($_POST["pregunta_re"]);

	$sql = "update registros set nombre_re = '$nombre_re',apellido_re = '$apellido_re',codigo_re = '$codigo_re',telefono_re = '$telefono_re',tip_doc = '$tip_doc',num_doc = '$num_doc',direccion_re = '$direccion_re',pais_re = '$pais_re',email_re = '$email_re' where id_registro = '$id_registro';";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) {
		header("Location: ./../completado.php");
	}else{
		header("Location: ./../error.php");
	}
?>