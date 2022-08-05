<?php 
    
    require("fpdf/fpdf.php");
    require("modulos/conexion.php");

    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
     $pdf->Image('modulos/logo.png',77,20,60);
    $pdf->Ln(40);
    $pdf->Cell(193,10,'Lista de coches alquilados',1,0,'C');
    $pdf->Ln(10);

    $pdf->Cell(20,10,utf8_decode("Nombre"),1,0,'C');
    $pdf->Cell(25,10,utf8_decode("N° Registro"),1,0,'C');
    $pdf->Cell(30,10,utf8_decode("Marca"),1,0,'C');
    $pdf->Cell(30,10,utf8_decode("Modelo"),1,0,'C');
    $pdf->Cell(25,10,utf8_decode("Placa"),1,0,'C');
    $pdf->Cell(31.5,10,utf8_decode("Desde"),1,0,'C');
    $pdf->Cell(31.5,10,utf8_decode("Hasta"),1,0,'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',9);
    $sql = "select idpre_renta, fecha_ini, fecha_fin, modelo.descripcion, placa, nombre_re, marca.descripcion as marca from pre_renta inner join marca on pre_renta.marca_pre=marca.idmarca inner join modelo on pre_renta.modelo_pre=modelo.idmodelo inner join registros on pre_renta.id_registro=registros.id_registro ORDER BY idpre_renta ;"   ;

    $query = $con->query($sql);

    while ($rs = mysqli_fetch_array($query)) {
   
        $pdf->Cell(20,10,($rs[utf8_decode("nombre_re")]),1,0,'C');

        $pdf->Cell(25,10,$rs[utf8_decode("idpre_renta")],1,0,'C');
        $pdf->Cell(30,10,$rs[utf8_decode("marca")],1,0,'C');
        $pdf->Cell(30,10,$rs[utf8_decode("descripcion")],1,0,'C');
        $pdf->Cell(25,10,$rs[utf8_decode("placa")],1,0,'C');
        $pdf->Cell(31.5,10,$rs[utf8_decode("fecha_ini")],1,0,'C');
        $pdf->Cell(31.5,10,$rs[utf8_decode("fecha_fin")],1,0,'C');
        $pdf->Ln(10);
    }
 


    //$pdf->Output("Registropre_renta.pdf","D");
    $pdf->Output('D');

?>