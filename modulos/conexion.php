<?php 

	$con = mysqli_connect("localhost","root","","rent_car");

	if (mysqli_connect_errno())
	  {
	  echo "Falla al conectar con MySQL: " . mysqli_connect_error();
	  }
	
 ?>