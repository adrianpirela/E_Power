<?php 


	//abrir la conexiÃ³n
	include("conexion.php");
	session_start();
	//recibir variables
	$email_re = $_SESSION['email_re'];
    $sql1 = "select id_registro from registros where email_re = '$email_re'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
    $id_registro = $rs1["id_registro"];
	
    $fecha_ini = $_POST["fecha_ini"];
    $fecha_fin = $_POST["fecha_fin"];
    $marca_pre = $_POST["marca_pre"];
    $modelo_pre = $_POST["modelo_pre"];
    $placa_re = $_POST["placa_pre"];

/* hecho por leiwy*/
	$dias=$fecha_fin-$fecha_ini;
	$sql2 = "SELECT monto FROM tarifa WHERE marca=$marca_pre";  
    $inst2 = mysqli_query($con,$sql2);
    $rs2 = mysqli_fetch_array($inst2);
    $monto = $rs2["monto"];
	
	$total=$monto * $dias;

	// falta poner total en el insert, pero se hara en el insert del que modifico prerenta. 
/* fin echo por leiwy */
	if (mysqli_num_rows($inst1) < 0) {

		header("Location: ./../error.php");

	}else{

		$sql = "insert into pre_renta values (null,'$id_registro','$fecha_ini','$fecha_fin','$marca_pre','$modelo_pre','$placa_re','$total');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../index.php?pag=pre_renta1");
	}
	


 ?>