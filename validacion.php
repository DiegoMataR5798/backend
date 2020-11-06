<?php

$nombre2=$_POST['nombre'];
$apellidos2=$_POST['apellidos'];
$correo2=$_POST['correo'];
$telefono2=$_POST['telefono'];
$contraseña2=$_POST['contraseña'];
$contraseña3=$_POST['contraseña1'];
    
$host1 ="127.0.0.1";
$user1="root";
$pass1="";
$bd1="ferreteriaacosta";
$puerto1="3308";   
if($contraseña2 != $contraseña3)
{
    header("LOCATION:registro.html");   
}

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
   isset($_POST['correo']) && !empty($_POST['correo']) &&
   isset($_POST['telefono']) && !empty($_POST['telefono']) &&
   isset($_POST['contraseña']) && !empty($_POST['contraseña']))
   {
    $EnlaceBD2= mysqli_connect($host1, $user1, $pass1, $bd1, $puerto1) or die("No se conecto a la base de datos");       
   echo "inicio sesion";
   $sql2="INSERT INTO usuarios( nombre, apellidos, correo, telefono, contraseña) VALUES('".$nombre2."','".$apellidos2."','".$correo2."','".$telefono2."','".$contraseña2."');";
     mysqli_query($EnlaceBD2,$sql2) or die ("No fue posible el registro");
     header("LOCATION:Menu.html");
    }
    else
    {
        echo "Error de inicio de sesion";   
    }

   
?>










