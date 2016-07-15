<?php
session_start();
include "config.php";
$link=Conectarse();

$login = $_POST['login'];
$pass = $_POST['pass'];
$pass=sha1(md5($pass));

$query = sprintf("SELECT usuarios.id,
		usuarios.login,
		usuarios.nombre,
		usuarios.apaterno,
		usuarios.amaterno,
		usuarios.email,
		usuarios.nivel
	FROM usuarios WHERE usuarios.login='%s'&& usuarios.password = '%s'",
	$login, $pass);
	
$result=mysql_query($query,$link);

if(mysql_num_rows($result)){
	$array=mysql_fetch_array($result);
	
	$_SESSION["id_usuario"]= $array["id"];
	$_SESSION["login"]= $array["login"];
	$_SESSION["nombre"]= $array["nombre"];
	$_SESSION["apaterno"]= $array["apaterno"];
	$_SESSION["amaterno"]= $array["amaterno"];
	$_SESSION["email"]= $array["email"];
	$_SESSION["nivel"]= $array["nivel"];
	
	header("Location:user.php");
} else {	
	echo "<h2>Login o Password Incorrectos</h2>";
}

?>