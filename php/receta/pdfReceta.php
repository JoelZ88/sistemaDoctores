<?php 
    include "./conexion.php";
    if(isset($_GET['id'])){
        $id_receta = $_GET['id'];
        //echo $id_receta;
    }
    
    $consulta = "SELECT * FROM receta WHERE id_receta = '$id_receta'";
    $resultado = mysqli_query($conexion,$consulta);
    
    $fila = mysqli_fetch_array($resultado);
    $id_doctor=$fila['id_doctor'];
    $nombreDoctor = $fila['nombreDoctor'];
    $paternoDoctor = $fila['paternoDoctor'];
    $maternoDoctor = $fila['maternoDoctor'];
    $id_paciente = $fila['id_paciente'];
    $paciente = $fila['paciente'];
    $fecha = $fila['fecha'];
    $peso = $fila['peso'];
    $talla = $fila['talla'];
    $ta = $fila['ta'];
    $fe = $fila['fe'];
    $temp = $fila['temp'];
    $receta = $fila['receta'];
    
    //print_r($fila);
    
?>
<?php
    require('./fpdf/fpdf.php');

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Movernos a la derecha
        $this->Cell(1);
        // Título
        $this->Cell(100,10,'Instituto tecgologico de CD Guzman',0,1,'');
        $this->Cell(100,10,'Sistema de Gestionar Doctores',0,1,'');
        //$this->Cell(100,10,$fila['nombreDoctor'],0,0,'');
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }


    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->aliasNbPages();
    $pdf->SetFont('Arial','B',14);
    $pdf->cell(90,10, 'Numero de control de Doctor: '.$id_doctor,0,1,'',0);
    $pdf->cell(90,10, 'Doctor: '.$fila['nombreDoctor'].' '.$fila['paternoDoctor']
    .' '.$fila['maternoDoctor'],0,1,'',0);
    $pdf->Ln(15);
    
    $pdf->cell(90,10, 'Numero de control de Paciente: '.$id_paciente,0,1,'',0);
    $pdf->cell(90,10, 'nombre del Paciente: '.$paciente,0,1,'',0);
    $pdf->cell(70,10, 'Fecha: '." ".$fecha,0,1,'',0);
    $pdf->cell(40,10, 'peso: '." ".$peso,1,0,'',0);
    $pdf->cell(60,10, 'Talla: '." ".$talla,1,0,'',0);
    $pdf->cell(60,10, 'Temperatura: '." ".$temp,1,1,'',0);
    
    $pdf->cell(80,10, 'Tension arterial: '." ".$ta,1,0,'',0);
    $pdf->cell(80,10, 'Frecuencia cardiaca: '." ".$fe,1,0,'',0);
    $pdf->Ln(25);
    $pdf->cell(60,10, 'Receta Medica:',0,1,'',0);
    
    $pdf->cell(190,80,$receta,1,0,'',0);

    $pdf->Output();
?>