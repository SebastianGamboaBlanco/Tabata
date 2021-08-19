<?php
    require("../../plugin/fpdf/fpdf.php");
    require_once (__DIR__.'/../mdb/mdbTabata.php');
    require_once("conexion.php");

    class PDF extends FPDF{
    // Cabecera de página
        function Header(){
        
            // Arial bold 15
            $this->SetFont('Arial','B',18);
            // Movernos a la derecha
            $this->Cell(70);
            // Título
            $this->Cell(30,10,'Tabata',0,0,'C');
            // Salto de línea
            $this->Ln(20);
        }

        // Pie de página
        function Footer(){
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    $idTabata =61; //$_POST['idTabata'];
    $tabata = verTabataId($idTabata);
    $result=json_encode($tabata);

    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,utf8_decode('Nombre de la Tabata:'),0,1);
    $pdf->Cell(40,10,$result,0,1);
    $pdf->Cell(40,10,utf8_decode('Tiempo de preparacion'),0,1);
    $pdf->Cell(40,10,utf8_decode('Tiempo de actividad'),0,1);
    $pdf->Cell(40,10,utf8_decode('Numero de rondas'),0,1);
    $pdf->Cell(40,10,utf8_decode('Tiempo de descanso'),0,1);
    $pdf->Cell(40,10,utf8_decode('Nombre de la series'),0,1);
    $pdf->Output();
    
?>