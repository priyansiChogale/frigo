<?php
//include connection file
include_once("conn.php");
include_once('fpdf184\fpdf.php');

$tablename = $_GET['tablename'];
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(90,10,'Monthly report',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$s2 = "select * from $tablename WHERE pexpiry <= CURDATE() order by pexpiry";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);

$s3 = "delete from $tablename WHERE pexpiry <= CURDATE() order by pexpiry";
$result3 = mysqli_query($con, $s3);
//$num2 = mysqli_num_rows($result2);

 
// $result = mysqli_query($con, "select * from $tablename WHERE pexpiry <= CURDATE() order by pexpiry") or die("database error:". mysqli_error($con));
// $header = mysqli_query($con, "SHOW columns FROM $tablename");
if ($num2>0){
    $pdf = new PDF();
    //header
    $pdf->AddPage();
    //foter page
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',12);
    // foreach($header as $heading) {
    // $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
    // }
    foreach($result2 as $row) {
    $pdf->Ln();
    foreach($row as $column)
    $pdf->Cell(40,12,$column,1);
    }
    $pdf->Output();
} else{
    $pdf = new PDF();
    //header
    $pdf->AddPage();
    //foter page
    $pdf->AliasNbPages();
    // $pdf->Image('food.jpg',5,-1,5);
    $pdf->Image('file1.jpg', $pdf->GetX(), $pdf->GetY(), 190.78);
    // foreach($header as $heading) {
    // $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
    // }
    
    $pdf->Output();
}

?>