<!DOCTYPE HTML>
<html>
  <head>
  </head>
  <body>
    
<?php
    // obtiene los datos de entrada del formulario
    $pss = $_POST['clave'];
    $pss2="100"; 
     
     $user = $_POST['usuario'];
     $buser = "udg"; 


   if($pss == $pss2 && $user == $buser){
   
  echo"Bienvenido"; echo"</br>";echo"</br>";
  echo "contrasenia es".$pss2; echo"</br>";
  echo"<a href= './datos.php'>   regresar   </a> ";

   }

else{    echo"Error en la ontrasenia o nombre de usuario";   

}


    
    

    ?>
  </body>
</html>
