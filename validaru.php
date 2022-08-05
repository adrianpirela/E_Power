<!-- control.php -->

<?php 
	include("modulos/conexion.php");
   $email_re=$_POST['email_re'];
    $pregunta_re=$_POST['pregunta_re'];
    $respuesta_re=$_POST['respuesta_re'];

$sql = "select pregunta_re,respuesta_re from registros where email_re='$email_re'";
 $inst = mysqli_query($con,$sql);
 	if (mysqli_num_rows($inst) > 0) {
 
		
while ($rs = mysqli_fetch_array($inst)){
	
		 if ($rs["pregunta_re"]==$pregunta_re && $rs["respuesta_re"]==$respuesta_re ){

		 	header("location: password.php?email_re='$email_re'");
		 }
	}

	

}else{
 header("location: index.php");
}
	
 ?>