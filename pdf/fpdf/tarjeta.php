<?php

require'fpdf.php';

$pdf = new FPDF('P','mm','A4');

///////////////////////////
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,10,'TARJETA DE EMBARQUE ',0,1,'C');
$pdf->Cell(190,10,'Gonzalez Juan Perez ',1,1,'C');
$pdf->Cell(150,20,'Origen: AEP - 14/12/2018 - 22:30hs',1,1,'L');
$pdf->Cell(150,20,'Destino: CDR - 21/12/2018 - 00:45hs',1,1,'L');
$pdf->Cell(190,8,'Nro. vuelo: 2098 - Asiento: 5B ',1,1,'C');
$pdf->Cell(190,4,'Recordar presentarse 1:30hr  antes de su vuelo ',1,1,'C');
/////////////////////////////
$pdf->Output();

?>
