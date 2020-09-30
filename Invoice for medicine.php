<?php

require("fpdf/fpdf.php");

class myPDF extends FPDF
{
    function header()
    {
    	$this->SetFont('Helvetica','B',20);
    	$this->Cell(276,10,'Mr.Sam_stark healthcare services pvt Ltd.,',1,0,'C');
    	$this->Ln();
    	$this->SetFont('Arial','',10);
    	$this->Cell(276,10,'(A Private Healthcare organization,Licensed as 12345:56789, H:O at Arumbakkam, Chennai,Tamilnadu,India)',0,0,'C');
    	$this->Ln();
    	$this->SetFont('Arial','U',10);
    	$this->Cell(276,9,'Medication order details for patient',0,0,'C');
    	$this->Ln();
    	$this->SetFont('Arial','B',10);
    	$this->Cell(276,7,'This is an online generated invoice copy for the medicines which had been purchased by the concerned patient through their online account',0,0,'C');
    	$this->Line(0,50,300,50);
    }
    function footer()
    {
       $this->SetFont('Arial','B',12);
       $this->Cell(-50,260,'Authorised Signatory :',0,0,'C');
       $this->SetY(-15);
       $this->SetFont('Arial','',8);
       $this->Cell(0,10,'Page no :'.$this->PageNo().'/{nb}',0,0,'C');
    }
}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->output();
?>