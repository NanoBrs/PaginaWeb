<?php
include("conexion.php");
$con=conectar();


$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fecha_nac=$_POST['fecha_nac'];
$edad=$_POST['edad'];

$sql="INSERT INTO usuarios ( email, contraseña, nombre, apellidos, rut, direccion, sexo, fecha_nac, edad) 
VALUES ('$email','$contraseña','$nombre','$apellidos','$rut','$direccion','$sexo','$fecha_nac','$edad')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: UsuariosR.php");
    
}else {
    Header("Location: index.html");
}