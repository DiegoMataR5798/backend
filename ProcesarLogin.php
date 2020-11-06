<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

   if ($usuario =="")
   {
   header("LOCATION: login.html");
   }
   if ($contraseña =="")
   {
   header("LOCATION: login.html");
   }


$host ="127.0.0.1";
$user="root";
$pass="";
$bd="ferreteriaacosta";
$puerto="3308";

if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
   isset($_POST['contraseña']) && !empty($_POST['contraseña']))
    {
        $EnlaceBD= mysqli_connect($host, $user, $pass, $bd, $puerto) or die("No se conecto a la base de datos");
        //mysqli_select_db('FerreteriaAcosta',$EnlaceBD) or die("No se puede se puede seleccionar la base de datos");
        
        //mysqli_query("SELECT nombre FROM usuarios;",$EnlaceBD);
         
      echo "Inicio de sesion";
      
      
    }
    else
    {
        echo "Error de inicio de sesion";
        
    }
?>
   <!DOCTYPE html>  
    <html>
    <head> </head>
    <body>
    <br></br>     
      <?php
      if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
         isset($_POST['contraseña']) && !empty($_POST['contraseña']))
      {
     $sql="SELECT correo FROM usuarios WHERE correo ='".$usuario."';";
     $resultado= mysqli_query($EnlaceBD,$sql) or die ("No se encontro el correo");
     $sql1="SELECT contraseña FROM usuarios WHERE correo='".$usuario."';";
     $resultado1=mysqli_query($EnlaceBD,$sql1) or die ("No se encontro la contraseña");
     
     while($resultado2=mysqli_fetch_array($resultado))
     {
     $correo1 = $resultado2['correo'];
     }
     while($resultado3=mysqli_fetch_array($resultado1))
     {
     $contra = $resultado3['contraseña'];
     }
      if( $usuario == $correo1)
      {
         if($contraseña == $contra)
         {
            header("LOCATION:Menu.html");
         }else
         {
            echo "Contraseña Incorrecta";
            header("LOCATION: login.html");
            print("Datos Incorrectos");
         }
      }
      else
      {
         echo "Usuario o contraseña incorrecto";
         header("LOCATION: login.html");
      
         
      }
      }
      ?>
   
    
    
 
    
    
    
    
    
    
    
    
    