<!DOCTYPE HTML>
<html>
  <head>
	<title>Formulario</title>
  </head>
  <body>
    <h2>Validacion de usuario</h2>
    
      <form action='./session.php' method='POST'>
      

      <label>Usuario</label>
      <input type = "text" name = "usuario" size = "10" maxlength = "10"    /> <br/>
      
      <label>Contrasenia</label>
      <input type = "password" name = "clave" size = "10" maxlength = "10"    /> <br/>
      
      <input type="submit" value = "ACEPTAR" />
    </form>
  </body>
</html>
