<?php 
session_start();
$_SESSION['autentificado']= false;
session_destroy();

header("location: index.php");

 ?>