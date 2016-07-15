<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear Usuario</title>
</head>

<body>

<form name="user_form" action="procesos/crea_usuarios.php" method="POST">Nombre de Usuario(nick):<br />
	<input type="text" name="login" size="30" maxlength="100" />
		<br /> Contraseña:
		<br />	
	<input type="password" name="pass1" />
		<br />Repite Contraseña:
		<br />
	<input type="password" name="pass2" />
		<br />Nombre:
		<br />	
	<input type="text" name="nombre" size="30" maxlength="100" />
		<br />
		Apellido Paterno:
		<br />
	<input type="text" name="apaterno" size="30" maxlength="100" />
		<br />Apellido Materno:
		<br />
	<input type="text" name="amaterno" size="30" maxlength="100" />
		<br />E-mail:
		<br />
	<input type="text" name="email" size="30" maxlength="100" />
		<br />Nivel del Usuario:
		<br />
	<select name="nivel">
        <option value="1">Nivel 1</option>
    	<option value="2">Nivel 2</option>
    	<option value="3">Nivel 3</option>
    </select>
		<br />
        <br />
	<input type="submit" name="crear" value="Crear Usuario" />
</form>
<p><a href="login.php">Iniciar Sesión</a></p>
</body>
</html>