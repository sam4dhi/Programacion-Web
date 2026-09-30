<?php
include('db.php');
    if($_SERVER['REQUEST_METHOD']=== 'GET'){
        //nombre
        $nombre = $_GET['nombre'];
        //correo
        $correo = $_GET['correo'];
        // telefono
        $telefono = $_GET['telefono'];

        //Consulta
        $sql = "INSERT INTO usuarios(nombre, email, telefono) VALUES('$nombre', '$correo', '$telefono')";

        //Enviarla
        if($conexion->query($sql) === TRUE){
            header('Location: create.php');
            exit();
        }else{
            echo "todo mal tonoto";
        }

    }else{
        echo "error";
    }
?>