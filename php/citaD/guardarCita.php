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
        echo "Ingresaste ";
        $row = mysqli_fetch_array($resultado);
    }
    echo "El id del  es".$row['id_doctor']."<br>";
    //echo "nombre del :  ".$row['nombre']."<br>";
    /*echo "apellido materno:  ".$row['materno']."<br>";
    echo "apellido paterno:  ".$row['paterno']."<br>";*/
    $idDoctor=$row['id_doctor'];
    //obtener nombre del doctor
    //$nombre = $row ['nombre'];
    /*$paternoDoctor = $row ['paterno'];
    $maternoDoctor = $row ['materno'];*/
/*hasta aqui obtengo la informacion de l doctor*/

    ///MODIFICADO DE CITA SIMULTANEA
    if(isset($_POST['boton'])){
        
        if(!$resultado22){
            $Fecha_Cita = $_POST['Fecha_Cita'];
            
            $query = "SELECT * FROM cita where Fecha_Cita = '$Fecha_Cita'";
            if($resultado23){
                $hora_Cita = $_POST['hora_Cita'];   
            $query = "SELECT * FROM cita where hora_Cita = '$hora_Cita'";
            echo "Fallo Cita ya creada";
            }
            //header("location:./citaD.php");
        }
     //AQUI TERMINA LA MODIFICACION DE LA COLISION DE CITAS           
         else{ 
          
            $id_paciente = $_POST['id_paciente'];
            //HAGO LA CONSULTA DE EL NOMBRE
            $query2 = "SELECT * FROM paciente where id_paciente = '$id_paciente'";
            //$resultado2 = mysqli_query($conexion,$query2);
            $nombre_paciente=$row['nombre'];
            //$nombre_paciente = $_POST['nombre'];
        
            $Fecha_Cita = $_POST['Fecha_Cita'];
            $hora_Cita = $_POST['hora_Cita'];

        
        echo $id_paciente."<br>";
        //echo $nombre_paciente."<br>";
        echo $Fecha_Cita."<br>";
        echo $hora_Cita."<br>";

        
        $consulta="INSERT into cita_medica(`id_doctor`,`id_paciente`,`nombre_paciente`,`Fecha_Cita`,`hora_Cita`)
        VALUES('$idDoctor',$id_paciente,'$nombre_paciente','$Fecha_Cita','$hora_Cita')";
        $result = mysqli_query($conexion,$consulta);

        if($result){
            echo "Ingresaste correctamente";
            $_SESSION['message'] = 'tarea guardada correctamente';
            $_SESSION['message_type'] = 'success';
            header("location:./citaD.php");
        }
        else{
            echo "Fallo al ingresar";
        }
     }

    }
?>