<?php
include ('../config/db.php');
if( $_SERVER['REQUEST_METHOD']=== 'POST' ){
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono =$_POST['telefono'];
$sql="INSERT INTO usuario (nombre, email, telefono) VALUES ('$nombre','$email','$telefono')";
}else{
echo "Error".$sql."<br>".$conn->error;
}
?>