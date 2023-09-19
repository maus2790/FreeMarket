<?php
require('assets/FPDF/fpdf.php'); // Incluye la librería FPDF

class PDF extends FPDF
{
    function Header()
    {
        // Cabecera del PDF (opcional)
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Reporte en PDF', 0, 1, 'C');
        $this->Cell(0, 10, 'Cabecera del Reporte', 0, 1, 'C');
    }

    function Footer()
    {
        // Pie de página con paginación
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Datos con los registros (usando los datos proporcionados)
$data = array(
    array(1, 'rogers63', 'david', 'john', 'Female', 1),
    array(2, 'mike28', 'rogers', 'paul', 'Male', 1),
    array(3, 'rivera92', 'david', 'john', 'Male', 1),
    array(4, 'ross95', 'maria', 'sanders', 'Male', 1),
    array(5, 'paul85', 'morris', 'miller', 'Female', 1),
    array(6, 'smith34', 'daniel', 'michael', 'Female', 1),
    array(7, 'james84', 'sanders', 'paul', 'Female', 1),
    array(8, 'daniel53', 'mark', 'mike', 'Male', 1),
    array(9, 'brooks80', 'morgan', 'maria', 'ñè é', 1),
);

// Crear un objeto PDF
$pdf = new PDF();
$pdf->AddPage();

// Configurar fuente y tamaño de texto
$pdf->SetFont('Arial', '', 12);

// Ancho de las celdas en la cabecera
$headerWidths = array(20, 30, 30, 30, 30, 20);

// Calcular el ancho total de la tabla
$tableWidth = array_sum($headerWidths);

// Calcular el espacio necesario para centrar la tabla
$marginLeft = ($pdf->GetPageWidth() - $tableWidth) / 2;

// Titulos de la cabecera
$col1 = 'ID';
$col2 = 'Usuario';
$col3 = 'Nombre';
$col4 = 'Apellido';
$col5 = 'Género';
$col6 = 'Estado';

// Mover la posición X al margen izquierdo
$pdf->SetX($marginLeft);

// Agregar títulos a la tabla
$pdf->Cell($headerWidths[0], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col1), 'ISO-8859-1'), 1);
$pdf->Cell($headerWidths[1], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col2), 'ISO-8859-1'), 1);
$pdf->Cell($headerWidths[2], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col3), 'ISO-8859-1'), 1);
$pdf->Cell($headerWidths[3], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col4), 'ISO-8859-1'), 1);
$pdf->Cell($headerWidths[4], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col5), 'ISO-8859-1'), 1);
$pdf->Cell($headerWidths[5], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $col6), 'ISO-8859-1'), 1);
$pdf->Ln(); // Salto de línea

// Recorrer los datos y agregarlos al PDF
foreach ($data as $row) {
    // Mover la posición X al margen izquierdo
    $pdf->SetX($marginLeft);

    for ($i = 0; $i < count($row); $i++) {
        $pdf->Cell($headerWidths[$i], 10, mb_strtoupper(iconv('UTF-8', 'ISO-8859-1', $row[$i]), 'ISO-8859-1'), 1);
    }
    $pdf->Ln(); // Salto de línea
}

// Salida del PDF (descarga)
$pdf->Output();
exit;
