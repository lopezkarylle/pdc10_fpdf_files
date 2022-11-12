<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('CevicheOne','','CevicheOne-Regular.php');
$pdf->AddPage();
$pdf->SetFont('CevicheOne','',35);
$pdf->Write(10,'Enjoy new fonts with FPDF!');
$pdf->Output();
?>
