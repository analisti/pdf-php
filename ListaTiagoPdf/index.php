require_once('fpdf/fpdf.php');


$data = array(
    array('Nome' => 'Gledson', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 8.5),
    array('Nome' => 'Kennet', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 7.0),
    array('Nome' => 'João Victor', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 9.0),
    array('Nome' => 'Marcus', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 7.5),
    array('Nome' => 'Lucas', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 6.8),
    array('Nome' => 'Gabriel', 'Curso' => 'ADS', 'Disciplina' => 'Linguagem Técnica de Programação II', 'Média' => 7.7),
);


$pdf = new FPDF();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Relatório de Notas', 0, 1, 'C');
$pdf->Ln(10);


$pdf->SetFont('Arial', '', 12);


$pdf->Cell(50, 10, 'Nome', 1, 0, 'C');
$pdf->Cell(30, 10, 'Curso', 1, 0, 'C');
$pdf->Cell(70, 10, 'Disciplina', 1, 0, 'C');
$pdf->Cell(40, 10, 'Média', 1, 1, 'C');


foreach ($data as $row) {
    $pdf->Cell(50, 10, $row['Nome'], 1, 0);
    $pdf->Cell(30, 10, $row['Curso'], 1, 0, 'C');
    $pdf->Cell(70, 10, $row['Disciplina'], 1, 0);
    $pdf->Cell(40, 10, $row['Média'], 1, 1, 'C');
}


$pdf->Output('relatorio.pdf', 'D');