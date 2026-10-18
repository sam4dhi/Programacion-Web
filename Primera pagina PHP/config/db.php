<?php
$host='sql200.infinityfree.com';
$port='3306';
$user='if0_43103380';
$pass='pTLiioTIsNoVc';
$db='if0_43103380_crud_app';
$coon = new mysqli($host,$user,$pass,$db,$port);
if($coon -> connect_error){
    die('Error en conexion DB'.$coon -> connect_error);
}else{
    echo "Genial tenemos conexion";
}
?>