<?php

    include "conexion.php";
    $correo=$_POST['correo'];
    $password=$_POST['password'];

    $x = "10";
    echo $correo;
    echo $password;

    if($correo == "" || $password ==""){
        echo 'error';
        header("location:../index.html");
    }
    else{
        $consulta="SELECT * FROM usuario_doctor WHERE correo='$correo'
        and pass='$password'";

        $resultado=mysqli_query($conexion,$consulta);

        $filas=mysqli_num_rows($resultado);

        if($filas > 0 ){
            session_start();
            $_SESSION['usu']=$correo;
            header("location:doctor/gestionarDoctor.php");
        }
        else{
            echo "error";
            header("location:../index.html");
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
?>
