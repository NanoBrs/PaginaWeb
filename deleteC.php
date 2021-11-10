<?php

include("conexion.php");
$con=conectar();

$id_contacto=$_GET['id_contacto'];

$sql="DELETE FROM contacto  WHERE id_contacto='$id_contacto'";
$query1=mysqli_query($con,$sql);

    if($query1){
        echo '<script language="javascript">alert("Eliminado Correctamente");window.location.href="UsuariosR.php"</script>';
    }
    else{
        echo '<script language="javascript">alert("Error al Eliminar ");window.location.href="UsuariosR.php"</script>';
    }
?>