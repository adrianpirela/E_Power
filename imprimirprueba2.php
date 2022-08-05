<?php 
    
    require("fpdf/fpdf.php");
    require("modulos/conexion.php");

    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
     $pdf->Image('modulos/logo.png',77,20,60);
    $pdf->Ln(40);
    $pdf->Cell(190,10,'Lista de Usuarios registrados',1,0,'C');
    $pdf->Ln(10);

    $pdf->Cell(25,10,utf8_decode("N° Usuario"),1,0,'C');
    $pdf->Cell(25,10,utf8_decode("Nombre"),1,0,'C');
    $pdf->Cell(25,10,utf8_decode("Apellido"),1,0,'C');
    $pdf->Cell(50,10,utf8_decode("Direccion"),1,0,'C');
    $pdf->Cell(25,10,utf8_decode("Pais"),1,0,'C');
    $pdf->Cell(40,10,utf8_decode("E-mail"),1,0,'C');

    $pdf->Ln(10);
    $pdf->SetFont('Arial','',9);
    $sql = "select * from registros ORDER BY id_registro ;"   ;

    $query = $con->query($sql);

    while ($rs = mysqli_fetch_array($query)) {
         $pdf->Cell(25,10,$rs[utf8_decode("id_registro")],1,0,'C');
        $pdf->Cell(25,10,($rs[utf8_decode("nombre_re")]),1,0,'C');
        $pdf->Cell(25,10,($rs[utf8_decode("apellido_re")]),1,0,'C');
       
        $pdf->Cell(50,10,$rs[utf8_decode("direccion_re")],1,0,'C');
        $pdf->Cell(25,10,$rs[utf8_decode("pais_re")],1,0,'C');
        $pdf->Cell(40,10,$rs[utf8_decode("email_re")],1,0,'C');

        $pdf->Ln(10);
    }
    $pdf->Line(60,220,150,220);
    $pdf->Ln(76);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,utf8_decode("E-Power Rent a Car"),0,0,"C");
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("Gerente General"),0,0,"C");
     $pdf->Image('modulos/firma2.png',75,176,60);


    //$pdf->Output("Registropre_renta.pdf","D");
    $pdf->Output();

?>