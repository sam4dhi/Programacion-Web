<?php
$host='127.0.0.1';
$port='3306';
$user='root';
$pass='1234';
$db='crud_app';
$conexion = new mysqli($host,$user,$pass,$db,$port);
if($conexion -> connect_error){
    die('Error en conexion DB'.$conexion -> connect_error);
}else{
    echo "Genial tenemos conexion";
}
?>