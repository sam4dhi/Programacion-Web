<?php
$host='127.0.0.1';
$port='3306';
$user='root';
$pass='1234';
$db='crud_app';
$coon = new mysqli($host,$user,$pass,$db,$port);
if($coon -> connect_error){
    die('Error en conexion DB'.$coon -> connect_error);
}else{
    echo "Genial tenemos conexion";
}
?>