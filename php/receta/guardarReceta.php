<?php
    include "./conexion.php";
    error_reporting(0);
    session_start();
    $varsesion = $_SESSION['usu'];
    if($varsesion == null || $varsesion =''){
        echo "<h1>Usted no tiene autorizacion </h1>";
        die();
    }
    $_SESSION['usuario'] = $_SESSION['usu'];
    $usuario = $_SESSION['usuario'];

    echo "Este es el usuario: ".$usuario."<br>";

    $query = "SELECT * FROM doctor where correo = '$usuario'";
    $resultado = mysqli_query($conexion,$query);

    if(!$resultado){
        echo "Error en la consulta <br>";
    }
    else{
        echo "Ingresaste";
        $row = mysqli_fetch_array($resultado);
    }
    echo "El id del doctor es".$row['id_doctor']."<br>";
    echo "nombre del doctor:  ".$row['nombre']."<br>";
    echo "apellido materno:  ".$row['materno']."<br>";
    echo "apellido paterno:  ".$row['paterno']."<br>";
    $id=$row['id_doctor'];
    //obtener nombre del doctor
    $nombreDoctor = $row ['nombre'];
    $paternoDoctor = $row ['paterno'];
    $maternoDoctor = $row ['materno'];

    if(isset($_POST['boton'])){
        $id_paciente = $_POST['id_paciente'];
        $paciente = $_POST['paciente'];
        $edad = $_POST['edad'];
        $peso = $_POST['peso'];
        $talla = $_POST['talla'];
        $ta = $_POST['ta'];
        $fe = $_POST['fe'];
        $temp = $_POST['temp'];
        $receta = $_POST['receta'];

        echo $paciente."<br>";
        echo $edad."<br>";
        echo $peso."<br>";
        echo $talla."<br>";
        echo $ta."<br>";
        echo $fe."<br>";
        echo $receta."<br>";
        
        $consulta = "INSERT INTO receta 
        (`id_doctor`,`nombreDoctor`,`paternoDoctor`,`maternoDoctor`,`id_paciente`,`paciente`,`edad`,`peso`,`talla`,`ta`,`fe`,`temp`,`receta`) 
        VALUES('$id','$nombreDoctor','$paternoDoctor','$maternoDoctor','$id_paciente','$paciente','$edad','$peso','$talla','$ta','$fe','$temp','$receta')";
        $result = mysqli_query($conexion,$consulta);
        if($result){
            echo "Ingresaste correctamente";
            $_SESSION['message'] = 'tarea guardada correctamente';
            $_SESSION['message_type'] = 'success';
            header("location:./receta.php");
        }
        else{
            echo "Fallo al ingresar";
        }
    }
?>