<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
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
	$respuesta_re = utf8_decode($_POST["respuesta_re"]);
	
	//validar
	$consulta = "select * from registros where num_doc = '$num_doc';";
	$query = mysqli_query($con,$consulta);

	if (mysqli_num_rows($query) > 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into registros values (null,'$nombre_re','$apellido_re','$codigo_re','$telefono_re','$tip_doc','$num_doc','$direccion_re','$pais_re','$email_re','$contra1_re','$pregunta_re','$respuesta_re');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../index.php");
	}
	

 ?>