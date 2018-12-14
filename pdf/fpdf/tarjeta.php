<?php

///variables declaradas de manera simulada para poder ejecutar
session_start();
$idVue = $_SESSION["idVuelo"];
$idPasa = $_SESSION["idPasajero"];
$butaca = $_SESSION["butaca"];
$fila = $_SESSION["fila"];



require'fpdf.php';

$pdf = new FPDF('P','mm','A4');

///////////////////////////
$pdf->AddPage();

////DATOS CONEXION//
mysql_connect("localhost","root","");
mysql_select_db("bdcheckin");
$sql = "SELECT *
			FROM pasajeros where idPasajero = ".$idPasa; 
$rec=mysql_query($sql);
$row =mysql_fetch_array($rec);

$sql2 = "SELECT *
			FROM vuelos where idVuelo = ".$idVue; 
$rec2=mysql_query($sql2);
$row2 =mysql_fetch_array($rec2);

$sql3 = "SELECT *
			FROM pasajerosvuelos where idPasajero = '".$idPasa."' and idVuelo = '".$idVue."'";
$rec3=mysql_query($sql3);
$row3 =mysql_fetch_array($rec3);

//////////////

///////////////////
$pdf->SetFont('Times','B',10);
$pdf->Cell(190,10,'TARJETA DE EMBARQUE / BOARDING PASS: ',0,1,'L');
$pdf->Image('logo.jpg' , 150 ,15, 40 , 39,'JPG', 'http://www.desarrolloweb.com');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,30,'Nombre del pasajero / Passenger Name: ' ,1,0,'L');
$pdf->Cell(60,30,'		'.$row['apellido'].' '.$row['nombres'],1,0,'L');
$pdf->Cell(43,30,' ' ,1,1,'L');

/////////////////////////////////////////////
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Desde / From: 	'.$row2['origen'] ,1,0,'L');
$pdf->Cell(133,10, 'Fecha - Hora/ Date - Time:	'.$row2['fecha'].' - '.$row2['horaSalida'] ,1,1,'L');
$pdf->Cell(50,10,'A / To: 	'.$row2['destino'] ,1,0,'L');
$pdf->Cell(133,10, 'Fecha - Hora/ Date - Time:	'.$row2['fecha'].' - '.$row2['horaLlegada'],1,1,'L');
$pdf->SetFont('Arial','B',10);
//////////////////////////////////////////////////
$pdf->Cell(90,10,'Nro. de vuelo / Flight number: ' ,1,0,'L');
$pdf->SetFont('Arial','B',18);
$pdf->Cell(93,10,'AR'.$row2['numero'],1,1,'R');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,10,'Asiento / Seat: ' ,1,0,'L');
$pdf->SetFont('Arial','B',18);
$pdf->Cell(93,10,$row3['fila'].$row3['butaca'],1,1,'R');
////////////////////////////////////////////////////
$pdf->SetFont('Arial','B',9);
$pdf->Cell(183,38,'Recordar presentarse 1:30hr  antes de su vuelo ',1,1,'C');
$pdf->Image('codigo.jpg' , 11 ,92, 35 , 35,'JPG', 'http://www.desarrolloweb.com');
/////////////////////////////
$pdf->Output();

?>
