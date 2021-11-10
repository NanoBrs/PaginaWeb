<?php
    include("conexion.php");
    $con=conectar();
    
    $id_contacto=$_POST['id_contacto'];
    $email=$_POST['email'];
    $Motivo=$_POST['Motivo'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $rut=$_POST['rut'];
    $direccion=$_POST['direccion'];
    $sexo=$_POST['sexo'];
    $fecha_nac=$_POST['fecha_nac'];
    $edad=$_POST['edad'];
    
    $sql="UPDATE contacto SET email ='$email', Motivo='$Motivo', nombre='$nombre', apellidos='$apellidos',
    rut='$rut', direccion='$direccion', sexo='$sexo', fecha_nac='$fecha_nac', edad='$edad' WHERE id_contacto='$id_contacto' ";
    
    $query= mysqli_query($con,$sql);

    if($query){
      echo '<script language="javascript">alert("Modificado Correctamente");window.location.href="UsuariosR.php"</script>';

      
    }else {
      echo '<script language="javascript">alert("Error,no se ha podido modificar el usuario");window.location.href="UsuariosR.php"</script>';
    }
?>