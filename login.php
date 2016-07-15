<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iniciar Sesión</title>
</head>

<body>

<h1>Identificación</h1>
<form name = "miform" action="procesos/procesa_login.php" method="POST">
	<br />Login:
    <br />
	<input type="text" name="login">
	<br />Password:
    <br />
	<input type="password" name="pass">
    <br />
    <br />
	<input class="boton" type="submit" value="Entrar">
</form>
<p><a href="formulario.php">Registrase en el Sistema</a></p>
</body>
</html>