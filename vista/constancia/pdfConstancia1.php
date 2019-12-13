<?php
include 'fpdf/fpdf.php';

class PDF extends FPDF
{

	function Header()
	{
             $this->Image('img/plantillaaulas.jpg','2','0','145','185','JPG');                           
	}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();
$pdf->SetMargins(15, 25 , 30);
?>