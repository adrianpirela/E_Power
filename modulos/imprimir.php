<?php 
		
	include 'conexion.php';
	require 'fpdf/fpdf.php';

	$idpre_renta = $_POST["idpre_renta"];

	    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('logo.png',70,25,80);
            $this->SetFont('Arial','B',15);
            $this->Cell(80);
            $this->Ln(15);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 5,5 cm del final
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,6,utf8_decode("Generado el ".date("d-m-Y")." a las ".date("H:i:s")),0,0,"C");
        }

    }
    
    
    $pdf = new PDF('P','mm','Letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',22);
    $pdf->Ln(25);
    $pdf->Cell(0,8,utf8_decode('Registro de Pre-renta'),0,0,'C');
    $pdf->Ln(15);
    $pdf->SetFont('Arial','I',10);
    $pdf->MultiCell(0,10,utf8_decode('Debes presentar esta planilla al momento de realizar la renta del auto reservado.'),'C');
    $pdf->Ln(14);
    $pdf->SetFont('Arial','B',15);

        $sql1 = "select p.*,r.* from pre_renta p, registros r where p.idpre_renta = '$idpre_renta' and r.id_registro=p.id_registro;";
      	$inst1 = mysqli_query($con,$sql1);

        while ($rs = mysqli_fetch_array($inst1)) {

    $pdf->Cell(60,10,utf8_decode("N° de Registro"),1,0,"L");
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,utf8_decode($rs["idpre_renta"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Nombre",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["nombre_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Apellido",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["apellido_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Direccion",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["direccion_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Marca",1,0,"L");
    $pdf->SetFont('Arial','',11);

    $marca = $rs["marca_pre"];

    $sql2 = "select * from marca where idmarca = '$marca';";
    $inst2 = mysqli_query($con,$sql2);
    while ($rs2 = mysqli_fetch_array($inst2)) {

    $pdf->Cell(130,10,utf8_decode($rs2["descripcion"]),1,0,"L");
    }//end while

    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,utf8_decode("Modelo"),1,0,"L");
    $pdf->SetFont('Arial','',11);


    $modelo = $rs["modelo_pre"];

    $sql3 = "select * from modelo where idmodelo = '$modelo' ;";
    $inst3 = mysqli_query($con,$sql3);
    while ($rs3 = mysqli_fetch_array($inst3)) {

    $pdf->Cell(130,10,utf8_decode($rs3["descripcion"]),1,0,"L");

    }//end while

    /* hecho por leiwy*/ 
    $pdf->Ln(10);
     $pdf->SetFont('Arial','B',15);
    $pdf->Cell(60,10,utf8_decode("Placa"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["placa"]),1,0,"L");
      $pdf->Ln(10);
       $pdf->SetFont('Arial','B',15);
    $pdf->Cell(60,10,utf8_decode("Monto Total a Pagar"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["monto"]),1,0,"L");
    /* fin leiwy*/

   	$pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,utf8_decode("Desde"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["fecha_ini"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,utf8_decode("Hasta"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["fecha_fin"]),1,0,"L");
    $pdf->Ln(30);

     	}


    $pdf->Line(60,220,160,220);
    $pdf->Ln(20);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,utf8_decode("E-Power Rent a Car"),0,0,"C");
    $pdf->Ln(9);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("Gerente General"),0,0,"C");
    $pdf->Image('firma2.png',75,177,60);
    $pdf->Output("Registropre_renta.pdf","D");

 ?>