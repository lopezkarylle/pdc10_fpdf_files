<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(47,10,'Karylle L. Lopez', 1, 2);
$pdf->Ln(2);
$pdf->Cell(130,10,'Bachelor of Science in Information Technology', 1, 2);
$pdf->Ln(2);
$pdf->Cell(70,10,'lopez.karylle@auf.edu.ph', 1, 2);
$pdf->Ln(2);
$pdf->Cell(35,10,'20-1068-435', 1);
$pdf->Ln(2);
$pdf->Output();
?>