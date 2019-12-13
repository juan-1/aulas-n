<?php
 $clave=$_GET['clave'];

include'pdfConstancia1.php';
$cn = mysqli_connect("localhost","root","","reservaunam");

$query =" SELECT numero_usuario, nombre, paterno, materno, email, tipoUsu, ruta, numero_reserva, nombreEve, descrip, material, tipo, fechaI, fechaF, horaI, horaF, fk_numAula FROM reservas 
inner join usuarios
ON usuarios.numero_usuario=reservas.fk_numUsu
where numero_reserva = '$clave'";

    $resultado = $cn->query($query);  

        $numfilas = $resultado->num_rows;
		if($numfilas==0){
			echo '<script>alert("Algo ha salido mal")</script> ';
			echo "<script>location.href='/walmartBeta/vista/index.php#'</script>";
				
	} else {



$pdf = new PDF('P','mm','A5');;
$pdf->AliasNbPages();
$pdf->Addpage();
$pdf->SetMargins(15, 25 , 30);
$pdf->SetTextColor( 3, 70, 5);

//-----------------DATOS PERSONALES-----------------------------------------------------

while($row = $resultado->fetch_assoc()){
$num=($row['numero_usuario']);
$nomUsuario = ($row['nombre'].' '.$row['paterno'].' '.$row['materno']);
$ema = ($row['email']);
$tipoU = ($row['tipoUsu']);
$rut = ($row['ruta']);
/////////////////////////////////////////////
$noR=($row['numero_reserva']);
$nomEve=($row['nombreEve']);
$des=($row['descrip']);
$mat = ($row['material']);
$tip=($row['tipo']);
$fi = ($row['fechaI']);
$ff=($row['fechaF']);
$hi = ($row['horaI']);
$hf=($row['horaF']);
$aula = ($row['fk_numAula']);
///////////////////////////////////////////////

//////////////////////////////////FOTO///////////////////////////////////////
//$pdf->Image('imagenes/'.($ubica), 22, 30, 26,29);
$pdf->Image(($rut), 11, 26, 29.5,39);
/////////////////////////////////////////////////////////////////////////////

////////////////////////////////////Nombre//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(60,38.3);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(27,5,utf8_decode($num),0,1,'L',1);

////////////////////////////////////Departamento//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(60.5,43.7);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,5,utf8_decode($nomUsuario),0,1,'L',1);

////////////////////////////////////Puesto//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(57,49);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,5,utf8_decode($ema),0,1,'L',1);

////////////////////////////////////Fecha Ingreso//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(55,54.3);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,5,utf8_decode($tipoU),0,1,'L',1);

////////////////////////////////////numero reserva//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(33,90);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($noR),0,1,'C',1);

////////////////////////////////////Entrada Trabajo//////////////////////////////////////////
$pdf->SetFillColor(   85, 191, 139   );
$pdf->SetXY(25.5,95.6);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(113,5,utf8_decode($nomEve),0,1,'L',1);

////////////////////////////////////Fecha Trabajo//////////////////////////////////////////
$pdf->SetFillColor( 85, 191, 139  );
$pdf->SetXY(20,101);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,5,utf8_decode($tip),0,1,'L',1);

////////////////////////////////////Salida Comida//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(26,106);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($aula),0,1,'C',1);

////////////////////////////////////Entrada Comida//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(43,111.5);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($fi),0,1,'C',1);

////////////////////////////////////Fecha Comida//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(46,116.7);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($ff),0,1,'C',1);

////////////////////////////////////Fecha Comida//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(38,122.1);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($hi),0,1,'C',1);

////////////////////////////////////Fecha Comida//////////////////////////////////////////
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(41.5,127.3);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,5,utf8_decode($hf),0,1,'C',1);

$pdf->SetFillColor( 85, 191, 139  );
$pdf->SetXY(39,132.6);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(80,5,utf8_decode($mat),0,1,'L',1);

$conteo=strlen($des); 
$pdf->SetFillColor(  85, 191, 139  );
$pdf->SetXY(33,138);
$pdf->SetFont('Arial','B',8);
if ($conteo<=75) {
	$pdf->Cell(105,5,utf8_decode($des),0,1,'L',1);
}else if ($conteo>=75) {
	$parte1 = substr($des, 0, 75);
	$parte2 = substr($des, 75, $conteo);
	$pdf->Cell(105,5,utf8_decode($parte1),0,1,'L',1);
	
	$pdf->SetFillColor(  85, 191, 139  );
	$pdf->SetXY(33,143);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(105,5,utf8_decode($parte2),0,1,'L',1);
}


}

$pdf->Output();
}
?>