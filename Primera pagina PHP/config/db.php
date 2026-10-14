<?php
$host='sql200.infinityfree.com';
$port='3306';
$user='if0_43103380';
$pass='pTLiioTIsNoVc';
$db='if0_43103380_crud_app';
$conexion = new mysqli($host,$user,$pass,$db,$port);
if($conexion -> connect_error){
    die('Error en conexion DB'.$conexion -> connect_error);
}else{
    echo "Genial tenemos conexion";
}
?>