<?php
    //se incluye la conexion a la base de datos
    include "../conexion.php";
    error_reporting(0);
    session_start();
    $varsesion = $_SESSION['usu'];
    if($varsesion == null || $varsesion =''){
        echo "<h1>Usted no tiene autorizacion </h1>";
        die();
    }
    $_SESSION['usuario'] = $_SESSION['usu'];
    $usuario = $_SESSION['usuario'];

  // echo "El usuario es: ".$usuario;

    //validacion del inicion de sesion de que se un usuario autorizado
    $query = "SELECT * FROM paciente where correo = '$usuario'";
    $resultado = mysqli_query($conexion,$query);

    if(!$resultado){
        echo "error";
    }
    //se toma el identificador del paciente
    //se inserta a un arreglo de datos
    else{
        $row = mysqli_fetch_array($resultado);
        $id = $row['id_paciente'];
        //echo "<br>"."El id del paciente es: ".$id;
        //echo "<br>".$row['nombre']." ".$row['paterno']." ".$row['materno'];
    }
    
?>

<link rel="stylesheet" href="tabla.css">
<div>
    <table>
        <thead>
            <tr>
                <th>ID_Doctor  </th>
                <th>Doctor  </th>
                <th>Paciente  </th>
                <th>Peso  </th>
                <th>Frecuencia cardiaca  </th>
                <th>Receta Medicia</th>
                <th>Ver Receta</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                //se inserta ala base de datos
                $consulta = "SELECT * FROM `historial` WHERE `id_paciente`='$id'
                order by id_receta desc"; 
                $respuesta = mysqli_query($conexion,$consulta);
                $encuentra=mysqli_num_rows($resultado);

                if($encuentra == 0){
                    echo "<h1>Aun no te an diagnosticado <h1>";
                }
                else{
                    //se toma los d
                    while($fila = mysqli_fetch_array($respuesta)){?>
                        <tr>
                            <td>".$fila['id_doctor']."</td>
                            <th> <?php echo $fila['nombreDoctor']." ".$fila['maternoDoctor']." ".$fila['paternoDoctor']?> </th>
                            <td> <?php echo $fila['paciente']?></td>
                            <td> <?php echo $fila['peso']." kilogramos"?></td>
                            <td> <?php echo $fila['ta']?></td>
                            <td> <?php echo $fila['receta']?></td>
                            <td><a href="./verReceta.php">Ver</a></td>
                            
                        </tr>
                  
                    <?php }}?>
        </tbody>
    </table>
</div>