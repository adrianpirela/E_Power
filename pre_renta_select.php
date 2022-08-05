<?php 

  include("modulos/conexion.php");


$mensaje="";

if (isset($_POST['selectMarca'])) {
	$marca_pre =$_POST['selectMarca'];
     // $_POST['selectData'] is the selected value    // query here
    // and you can return the result if you want to do some things cool ;)
    //echo '{ "Marca":"'.$marca_pre.'"}';
    $sql="select idmodelo,descripcion from modelo where idmarca=$marca_pre";
    $consulta = mysqli_query($con,$sql);

  //Obtiene la cantidad de filas que hay en la consulta
     $filas = mysqli_num_rows($consulta);
         while($resultados = mysqli_fetch_array($consulta)) {
            $idmodelo=$resultados['idmodelo'];
            $descripcion=$resultados['descripcion'];
        
      //Output

        echo '{ "IDModelo":"'.$idmodelo.'","Descripcion":"'.$descripcion.'"}';  	
    }
}




if (isset($_POST['selectModelo'])) {
	$modelo_pre = $_POST['selectModelo'];
	$marca_pre1 =$_POST['selectMarca1'];
     // $_POST['selectData'] is the selected value    // query here
    // and you can return the result if you want to do some things cool ;)
    //echo '{ "Modelo":"'.$modelo_pre.'"}';

        $sql="select placa from vehiculos where idmarca=$marca_pre1 and idmodelo=$modelo_pre";
    $consulta = mysqli_query($con,$sql);

  //Obtiene la cantidad de filas que hay en la consulta
     $filas = mysqli_num_rows($consulta);
         while($resultados = mysqli_fetch_array($consulta)) {
            $placa=$resultados['placa'];
    
      //Output

        echo '{ "Placa":"'.$placa.'"}';  	
    }
}

 ?>