<?php

include dirname(dirname(__FILE__))."\Proyecto\config.php";

$link=Conectarse();

$Anombre1 = $_POST['Anombre1'];
$Anombre2 = $_POST['Anombre2'];
$Aapellido1 = $_POST['Aapellido1'];
$Aapellido2 = $_POST['Aapellido2'];
$Alumno_TCedula = $_POST['Alumno.ci'];
$Alumno_Cedula = $_POST['Aci.numero'];
$Fecha_de_Nacimiento = $_POST['Fecha de Nacimiento'];
$Lugar_de_Nacimiento = $_POST['Lugar de Nacimiento'];
$Año = $_POST['Año'];
$Mención = $_POST['Mención'];
$Sección = $_POST['Sección'];
$Repite1 = $_POST['Repite1'];
$Repite2 = $_POST['Repite2'];
$Asignaturas = $_POST['Asignaturas'];
$Cual = $_POST['Cual'];
$Talla = $_POST['Talla'];
$Peso = $_POST['Peso'];
$Pprocedencia = $_POST['Pprocedencia'];
$Salud = $_POST['Salud'];
$Problemas_de_Salud = $_POST['Problemas de Salud'];
$Acorreo = $_POST['Acorreo'];
$Acelular = $_POST['Acelular'];
$Mnombre1 = $_POST['Mnombre1'];
$Mnombre2 = $_POST['Mnombre2'];
$Mapellido1 = $_POST['Mapellido1'];
$Mapellido2 = $_POST['Mapellido2'];
$Mci_tipo = $_POST['Mci.tipo'];
$Mci_numero = $_POST['Mci.numero'];
$Mcelular = $_POST['Mcelular'];
$Mhabitación = $_POST['Mhabitación'];
$Moficina = $_POST['Moficina'];
$Mtrabajo = $_POST['Mtrabajo'];
$Mdirección = $_POST['Mdirección'];
$Mprofesión = $_POST['Mprofesión'];
$Pnombre1 = $_POST['Pnombre1'];
$Pnombre2 = $_POST['Pnombre2'];
$Papellido1 = $_POST['Papellido1'];
$Papellido2 = $_POST['Papellido2'];
$Pci_tipo = $_POST['Pci.tipo'];
$Pci_numero = $_POST['Pci.numero'];
$Pcelular = $_POST['Pcelular'];
$Phabitación = $_POST['Phabitación'];
$lPoficina = $_POST['Poficina'];
$Ptrabajo = $_POST['Ptrabajo'];
$Pdirección = $_POST['Pdirección'];
$Pprofesión = $_POST['Pprofesión'];
$Rnombre1 = $_POST['Rnombre1'];
$Rnombre2 = $_POST['Rnombre2'];
$Rapellido1 = $_POST['Rapellido1'];
$Rapellido2 = $_POST['Rapellido2'];
$Rci_tipo = $_POST['Rci.tipo'];
$Rci_numero = $_POST['Rci.numero'];
$Rcelular = $_POST['Rcelular'];
$Rhabitacion = $_POST['Rhabitacion'];
$Roficina = $_POST['Roficina'];
$Rtrabajo = $_POST['Rtrabajo'];
$Rdirección = $_POST['Rdirección'];
$Rprofesión = $_POST['Rprofesión'];
$Rparentesco = $_POST['Rparentesco'];
$Remail = $_POST['Remail'];
$PAnombre1 = $_POST['PAnombre1'];
$PAnombre2 = $_POST['PAnombre2'];
$PAapellido1 = $_POST['PAapellido1'];
$PAapellido2 = $_POST['PAapellido2'];
$PAci_tipo = $_POST['PAci.tipo'];
$PAci_numero = $_POST['PAci.numero'];
$PAcelular = $_POST['PAcelular'];
$PAhabitación = $_POST['PAhabitación'];
$PAoficina = $_POST['PAoficina'];
$PAtrabajo = $_POST['PAtrabajo'];
$PAdirección = $_POST['PAdirección'];
$PAparentesco = $_POST['PAparentesco'];

$query = sprintf("SELECT login FROM usuarios WHERE usuarios.login = '%s'" ,
$login);

$result=mysql_query($query,$link);

if(mysql_num_rows($result)){
	echo "El usuario ya existe en la Base de Datos";
} else {
	mysql_free_result($result);

	if($pass1!=$pass2) {
		echo "Los passwords deben coincidir";
	} else {

		$pass1=sha1(md5($pass1));

		$query = sprintf("INSERT INTO alumnos (1Nombre del Alumno, 2Nombre del Alumno, 1Apellido del Alumno, 2Apellido del Alumno, Tipo de C.I del Alumno, C.I del Alumno, Fecha de Nacimiento, Lugar de Nacimiento, Año, Mención, Sección, Repite, Materias que Repite, Asignaturas Pendientes, Que Asignaturas, Talla, Peso, Plantel de Procedencia, Problemas de Salud, Que Problemas, Correo del Alumno, Celular del Alumno, 1Nombre de la Madre, 2Nombre de la Madre, 1Apellido de la Madre, 2Apellido de la Madre, Tipo de C.I de la Madre, C.I de la Madre, Celular de la Madre, Habitación de la Madre, Oficina de la Madre, Lugar de Trabajo de la Madre, Dirección de la Madre, Profesión de la Madre, 1Nombre del Padre, 2Nombre del Padre, 1Apellido del Padre, 2Apellido del Padre, Tipo de C.I del Padre, Celular del Padre, Habitación del Padre, Oficina del Padre, Lugar de Trabajo del Padre, Dirección del Padre, Profesión del Padre, 1Nombre del Representante, 2Nombre del Representante, 1Apellido del Representante, 2Apellido del Representante, Tipo del C.I del Representante, C.I del Representante, Celular del Representante, Habitación del Representante, Oficina del Representante, Lugar de Trabajo del Representante, Profesión del Representante, Parentesco del Representante, Correo del Representante, 1Nombre de la PA, 2Nombre de la PA, 1Apellido de la PA, 2Apellido de la PA, Tipo de C.I de la PA, C.I de la PA, Celular de la PA, Habitación de la PA, Oficina de la PA, Dirección de la PA, Profesión de la PA, Parentesco de la PA)

VALUES ('%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s', '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',)",$Anombre1, $Anombre2, $Aapellido1, $Aapellido2, $Alumno_TCedula, $Alumno_Cedula, $Fecha_de_Nacimiento, $Lugar_de_Nacimiento, $Año, $Mención, $Sección, $Repite1, $Repite2, $Asignaturas, $Cual, $Talla, $Peso, $Pprocedencia, $Salud, $Problemas_de_Salud, $Acorreo, $Acelular, $Mnombre1, $Mnombre2, $Mapellido1, $Mapellido2, $Mci_tipo, $Mci_numero, $Mcelular, $Mhabitación, $Moficina, $Mtrabajo, $Mdirección, $Mprofesión, $Pnombre1, $Pnombre2, $Papellido1, $Papellido2, $Pci_tipo, $Pci_numero, $Pcelular, $Phabitación, $Poficina, $Ptrabajo, $Pdirección, $Pprofesión, $Rnombre1, $Rnombre2, $Rapellido1, $Rapellido2, $Rci_tipo, $Rci_numero, $Rcelular, $Rhabitacion, $Roficina, $Rtrabajo, $Rdirección, $Rprofesión, $Rparentesco, $Remail, $PAnombre1, $PAnombre2, $PAapellido1, $PAapellido2, $PAci_tipo ,$PAci_numero, $PAcelular, $PAhabitación, $PAoficina, $PAtrabajo, $PAdirección, $PAparentesco);

		$result=mysql_query($query,$link);

		if(mysql_affected_rows()){
			header("Location: ../login.php");
		} else {
			echo "Ocurrio un Error al Introducir los Datos";
		}
	}
}

?>