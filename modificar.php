<?php
    include("conexion.php");
    $con=conectar();
    
    $id=$_POST['id'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $rut=$_POST['rut'];
    $direccion=$_POST['direccion'];
    $sexo=$_POST['sexo'];
    $fecha_nac=$_POST['fecha_nac'];
    $edad=$_POST['edad'];
    
    $sql="UPDATE usuarios SET email ='$email', contraseña='$contraseña', nombre='$nombre', apellidos='$apellidos',
    rut='$rut', direccion='$direccion', sexo='$sexo', fecha_nac='$fecha_nac', edad='$edad' WHERE id='$id' ";
    
    $query= mysqli_query($con,$sql);

    if($query){
      echo '<script language="javascript">alert("Modificado Correctamente");window.location.href="UsuariosR.php"</script>';

      
    }else {
      echo '<script language="javascript">alert("juas");</script>';
      Header("Location: index.html");
    }
?>