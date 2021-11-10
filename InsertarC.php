<?php
include("conexion.php");
$con=conectar();


$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fecha_nac=$_POST['fecha_nac'];
$edad=$_POST['edad'];
$Motivo=$_POST['Motivo'];


$sql="INSERT INTO contacto ( email, nombre, apellidos, rut, direccion, sexo, fecha_nac, edad ,Motivo ) 
VALUES ('$email','$nombre','$apellidos','$rut','$direccion','$sexo','$fecha_nac','$edad','$Motivo')";

$query= mysqli_query($con,$sql);

if($query){
    echo '<script language="javascript">alert("Contacto realizado Correctamente,pronto te enviaremos un correo");window.location.href="index.php"</script>';
    
}else {
    echo '<script language="javascript">alert("Error,el contacto no se ha podido realizar :(");window.location.href="index.php"</script>';
}