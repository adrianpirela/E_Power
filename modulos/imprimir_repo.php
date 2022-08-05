<?php 
		
	include 'conexion.php';
	require 'fpdf/fpdf.php';

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
    $pdf->Cell(0,8,utf8_decode('Reporte'),0,0,'C');
    $pdf->Ln(15);
    $pdf->SetFont('Arial','I',10);
    $pdf->MultiCell(0,10,utf8_decode('Reporte Pre rentas realizadas.'),'C');
    $pdf->Ln(14);
    $pdf->SetFont('Arial','B',15);

        $sql1 = "select * from pre_renta;";
      	$inst1 = mysqli_query($con,$sql1);

        while ($rs = mysqli_fetch_array($inst1)) {

    $pdf->Cell(60,10,utf8_decode("N° de Registro"),1,0,"L");
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,utf8_decode($rs["idpre_renta"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Nombre",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs4["nombre_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Apellido",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs4["apellido_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Direccion",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs4["direccion_re"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,"Marca",1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs2["descripcion"]),1,0,"L");
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(10);
    $pdf->Cell(60,10,utf8_decode("Modelo"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs3["descripcion"]),1,0,"L");



    /* hecho por leiwy*/ 
    $pdf->Ln(10);
     $pdf->SetFont('Arial','B',15);
    $pdf->Cell(60,10,utf8_decode("Placa"),1,0,"L");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(130,10,utf8_decode($rs["placa"]),1,0,"L");
      $pdf->Ln(10);
       $pdf->SetFont('Arial','B',15);
    $pdf->Cell(60,10,utf8_decode("Monto"),1,0,"L");
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

        $pdf->Output("Reportepre_renta.pdf","D");
 ?>