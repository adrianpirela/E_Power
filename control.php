
<?php 	

	include("modulos/conexion.php");


	$email_re == $_POST['email_re'];
	$contra1_re == $_POST['contra1_re'];

	$sql = "select '$email_re', '$contra1_re' from registros where email_re = '$email_re';";
	$inst = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($inst);

 if ($rs["email_re"]==$email_re  &&  $rs["contra1_re"]==$contra1_re)

{

session_start();

$_SESSION['autentificado']= true;
header("location: index.php");
$_SESSION['email_re']= $_REQUEST['email_re'];


}

else
{
$_SESSION['autentificado']= false;

header("location: index.php?pag=login");

}




 ?>