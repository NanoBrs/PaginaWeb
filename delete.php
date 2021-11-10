<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    echo '<script language="javascript">alert("Eliminado Correctamente");window.location.href="UsuariosR.php"</script>';
}
else{
    echo '<script language="javascript">alert("Error al Eliminar ");window.location.href="UsuariosR.php"</script>';
}
?>