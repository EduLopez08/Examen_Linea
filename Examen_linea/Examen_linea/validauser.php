<!DOCTYPE html>
<html>
<head>
<title>Registro de Conimi 2019</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href = "fonts.css" rel = "stylesheet">
  <link href = "stylesocial.css" rel = "stylesheet">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 

 </head>

<div class="container vertical-center">	
<center>
<div class="form-group">
   <h1><label class="control-label col-sm-12" for="ecb" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo-conimi.png" class="image-circle" width="50%" height="70%" /><br><br></label></h1>
</div>
</center>
		<?php
			include 'conexion.php';
			$password_i=$_REQUEST['password_e'];
			$password_d=base64_decode($password_i);
			$user_i=$_REQUEST['user_e'];
			$user_d=base64_decode($user_i);
			$query="SELECT * FROM usuarios where id_usuario='$user_d' and contrasenia='$password_d' ";
			$resultado = $mysqli->query($query);
		    if($password_d === $resultado['password'] && $user_d === $resultado['usuario']){
                //Haces header o un echo si haces peticion por ajax a la ruta de la vista que accede.
          }else{
               //Haces header o un echo si haces peticion por ajax a la ruta de la vista de logueo nuevamente ya que no coincide el password o usuario.
          }
			
		?>
	</div>
</body>
</html>