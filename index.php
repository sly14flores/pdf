<?php

require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');

// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("pds2005.pdf");
// import page 1
$tplIdx = $pdf->importPage(2);
// use the imported page and place it at position 0, 0 with original width
$pdf->useTemplate($tplIdx, null, null, 0, 0, true);

// now write some text above the imported page
$pdf->SetFont('Arial', '', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(150, 1);
$pdf->Write(0, 'This is just a simple text');

$pdf->Output();

?>