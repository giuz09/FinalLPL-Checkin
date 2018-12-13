<?php

require'fpdf.php';

$pdf = new FPDF('P','mm','A4');

///////////////////////////
$pdf->AddPage();

$pdf->SetFont('Arial','B',15);
$pdf->Cell(190,10,'TARJETA DE EMBARQUE ',1,1,'C');
$pdf->Cell(95,50,'AEP 22:30-------------------------',1,0,'L');
$pdf->Cell(95,50,'CDR 00:45-------------------------',1,0,'L');
/////////////////////////////
$pdf->Output();

?>