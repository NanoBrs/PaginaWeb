<?php
include('conexion.php');
$con=conectar();

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];





$consulta="SELECT*FROM usuarios where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
  
    echo '<script language="javascript">alert("Bienvenido");window.location.href="index.php"</script>';
    $Datos=mysqli_fetch_array($resultado);
    session_start();
    $_SESSION['estado']=true;
    $_SESSION['id']=$Datos['id'];
    $_SESSION['email']=$Datos['email'];
    $_SESSION['nombre']=$Datos['nombre'];
    $_SESSION['rol']=$Datos['rol'];
}else{
    echo '<script language="javascript">alert("Error de autentificación,volviendo al login");window.location.href="login.php"</script>';
   
}

?>
