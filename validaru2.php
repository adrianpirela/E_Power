<?php 
	include("modulos/conexion.php");
   $email_re=$_POST['email_re'];
    $contra1_re=$_POST['contra1_re'];
    $contra2_re=$_POST['contra2_re'];

if($contra1_re==$contra2_re)
{
	$sql = "update registros set contra1_re=$contra1_re where email_re=$email_re;";
 $inst = mysqli_query($con,$sql);


  header("location: index.php");
}else{
 header("location: password.php?email_re='$email_re'");

}
	
 ?>
