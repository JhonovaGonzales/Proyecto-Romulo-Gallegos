<!DOCTYPE html lang=es>
  <head>
    <title> Romulo Gallegos </title>
    <!-- Metas -->
    <meta charset='UTF-8' />
    <meta name='description' content='Descripcion de la Pagina para los Buscadores' />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximun-scale=1' />
    <!-- Estilos -->
    <link rel='shortcut icon' type='image/x-icon' href='logo_romulo.ico' />
    <link rel='stylesheet' type='text/css' href='styles.css' />
    <!-- Scripts -->
     <script src='script.js'></script>
  </head>

  <body>
<center> 
    <header class="secciones">
      <img src="logo.jpg">
      <p>República Bolivariana de Venezuela</p>
      <p>Ministerio del Poder Popular para la Educacion</p>
      <p>E.T.R Romulo Gallegos</p>
      <p>Maracaibo - Edo.Zulia</p>
    </header>

    <div class="secciones">
      <h1>FICHA DE INSCRIPCION</h1>
      <h4> DATOS DEL ESTUDIANTE </h4>
      <form name="datos" action="crea_usuarios.php" method="POST">
        <p>Nombres y Apellidos</p>
        <input type="text" name='Anombre1' placeholder="Primer Nombre" />
        <input type="text" name='Anombre2' placeholder="Segundo Nombre" />
        <input type="text" name='Aapellido1' placeholder="Primer Apellido" />
        <input type="text" name='Aapellido2' placeholder="Segundo Apellido" />

        <p>C.I</p>
        <select name="Aci.tipo">
          <option value="Venezolana">Venezolana</option>
          <option value="Extranjera">Extranjera</option>
        </select>
        <input type="number" placeholder="C.I" name='Aci.numero' />

        <p>Fecha de Nacimiento:</p>
        <input type='date' name='Fecha de Nacimiento' />

        <p>Lugar de Nacimiento:</p>
        <input type='text' name='Lugar de Nacimiento' />

        <p>Año</p>
        <select placeholder="Año" name="Año">
          <option value='1er'>1er</option>
          <option value='2do'>2do</option>
          <option value='3ro'>3ro</option>
          <option value='4to'>4to</option>
          <option value='5to'>5to</option>
          <option value='6to'>6to</option>
        </select>

        <p>Mención:</p>
        <input type="text" placeholder="Mención" name="Mención" />

        <p>Sección:</p>
        <input type="text" placeholder="Sección" name="Sección" />

        <p>¿Repite?:</p>
        <select name="Repite1">
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>
        <p>Materias que repite:</p>
        <input type="text" placeholder="Materias que repite" name='Repite2' />

        <p>¿Asignaturas Pendientes?:</p>
        <select name="Asignaturas">
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>

        <p>¿Cual?:</p>
        <input type="text" placeholder="¿Cual?" name='Cual' />

        <p>Talla:</p>
        <input type="text" placeholder="Talla" name='Talla' />

        <p>Peso:</p>
        <input type="text" placeholder="Peso" name='Peso' />

        <p>Plantel de Procedencia:</p>
        <input type="text" placeholder="Plantel de procedencia" name='Pprocedencia' />

        <p>Presente algun problema de salud que le impida hacer deportes?:</p>
          <select name="Salud">
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>

        <p>Cual?</p>
          <input type="text" name='Problemas de Salud' />

         <p>Correo Electrónico del Estudiante:</p>
          <input type="email" name='Acorreo' />

        <p>Telefono Celular:</p>
          <input type="tel" name='Acelular' />
    </div>

    <div class="secciones">      
      <h2>DATOS DEL REPRESENTANTE</h2>
      <h4>DATOS DE LA MADRE</h4>

      <p>Nombres y Apellidos:</p>
      <input type="text" name='Mnombre1' placeholder="Primer Nombre" />
        <input type="text" name='Mnombre2' placeholder="Segundo Nombre" />
        <input type="text" name='Mapellido1' placeholder="Primer Apellido" />
        <input type="text" name='Mapellido2' placeholder="Segundo Apellido" />

        <p>C.I</p>
        <select name="Mci.tipo">
          <option value="Venezolana">Venezolana</option>
          <option value="Extranjera">Extranjera</option>
        </select>
        <input type="number" placeholder="C.I" name='Mci.numero' />

      <p>Telefonos:</p>
      <input type="text" placeholder="Celular" name='Mcelular' />
      <input type="text" placeholder="Vivienda o Habitación" name='Mhabitación' />
      <input type="text" placeholder="Oficina o Area de Trabajo" name='Moficina' />

      <p>Lugar de Trabajo:</p>
      <input type="text" name='Mtrabajo' />

      <p>Dirección:</p>
      <input type="text" placeholder="Vivienda o Habitacion" name='Mdirección' />

      <p>Profesión:</p>
      <input type="text" name='Mprofesión' />
    </div>


    <div class="secciones">
      <h4 class='Title'>DATOS DEL PADRE</h4>

      <p>Nombres y Apellidos:</p>
        <input type="text" name='Pnombre1' placeholder="Primer Nombre" />
        <input type="text" name='Pnombre2' placeholder="Segundo Nombre" />
        <input type="text" name='Papellido1' placeholder="Primer Apellido" />
        <input type="text" name='Papellido2' placeholder="Segundo Apellido" />

        <p>C.I</p>
        <select name="Pci.tipo">
          <option value="Venezolana">Venezolana</option>
          <option value="Extranjera">Extranjera</option>
        </select>
        <input type="number" placeholder="C.I" name='Pci.numero' />

      <p>Telefonos:</p>
      <input type="text" placeholder="Celular" name='Pcelular' />
      <input type="text" placeholder="Vivienda o Habitacion" name='Phabitación' />
      <input type="text" placeholder="Oficina o Area de Trabajo" name='Poficina' />

      <p>Lugar de Trabajo:</p>
      <input type="text" name='Ptrabajo' />

      <p>Dirección</p>
      <input type="text" placeholder="Vivienda o Habitacion" name='Pdirección' />

      <p>Profresión:</p>
      <input type="text" name='Pprofesión' />
    </div>

    <div class="secciones">
      <h4>REPRESANTE LEGAL EN EL PLANTEL</h4>

      <p>Nombres y Apellidos:</p>
      <input type="text" name='Rnombre1' placeholder="Primer Nombre" />
        <input type="text" name='Rnombre2' placeholder="Segundo Nombre" />
        <input type="text" name='Rapellido1' placeholder="Primer Apellido" />
        <input type="text" name='Rapellido2' placeholder="Segundo Apellido" />

        <p>C.I</p>
        <select name="Rci.tipo">
          <option value="Venezolana">Venezolana</option>
          <option value="Extranjera">Extranjera</option>
        </select>
        <input type="number" placeholder="C.I" name='Rci.numero' />

      <p>Telefonos:</p>
      <input type="text" placeholder="Celular" name='Rcelular' />
      <input type="text" placeholder="Vivienda o Habitacion" name='Rhabitacion' />
      <input type="text" placeholder="Oficina o Area de Trabajo" name='Roficina' />

      <p>Lugar de Trabajo:</p>
      <input type="text" name='Rtrabajo' />

      <p>Dirección</p>
      <input type="text" placeholder="Vivienda o Habitacion" name='Rdirección' />

      <p>Profesión:</p>
      <input type="text" name='Rprofesión' />

      <p>Parentesco:</p>
      <select name='Rparentesco'>
        <option value='Padre'>Padre</opiton>
        <option value='Madre'>Madre</opiton>
        <option value='Tio'>Tio</opiton>
        <option value='Tia'>Tia</opiton>
        <option value='Abuelo'>Abuelo</opiton>
        <option value='Abuela'>Abuela</opiton>
        <option value='Padrino'>Padrino</opiton>
        <option value='Madrina'>Madrina</opiton>
        <option value='Otros'>Otros</opiton>
      </select>

      <p>Correo Electrónico:</p>
      <input type="email" name='Remail' />
    </div>

    <div class="secciones">
      <h4>PERSONA AUTORIZDA POR EL REPRESENTANTE EN CASO DE NO ASISTIR EL MISMO</h4>

      <p>Nombres y Apellidos:</p>
      <input type="text" name='PAnombre1' placeholder="Primer Nombre" />
        <input type="text" name='PAnombre2' placeholder="Segundo Nombre" />
        <input type="text" name='PAapellido1' placeholder="Primer Apellido" />
        <input type="text" name='PAapellido2' placeholder="Segundo Apellido" />

        <p>C.I</p>
        <select name="PAci.tipo">
          <option value="Venezolana">Venezolana</option>
          <option value="Extranjera">Extranjera</option>
        </select>
        <input type="number" placeholder="C.I" name='PAci.numero' />

      <p> Telefonos:</p>
      <input type="text" placeholder="Celular" name='PAcelular' />
      <input type="text" placeholder="Vivienda o Habitacion" name='PAhabitación' />
      <input type="text" placeholder="Oficina o Area de Trabajo" name='PAoficina' />

      <p>Lugar de Trabajo:</p>
      <input type="text" name='PAtrabajo' />

      <p>Dirección</p>
      <input type="text" placeholder="Vivienda o Habitacion" name='PAdirección' />

      <p>Profesión:</p>
      <input type="text" name='PAprofesión' />

      <p>Parentesco:</p>
      <select name='PAparentesco'>
        <option value='Padre'>Padre</opiton>
        <option value='Madre'>Madre</opiton>
        <option value='Tio'>Tio</opiton>
        <option value='Tia'>Tia</opiton>
        <option value='Abuelo'>Abuelo</opiton>
        <option value='Abuela'>Abuela</opiton>
        <option value='Padrino'>Padrino</opiton>
        <option value='Madrina'>Madrina</opiton>
        <option value='Otros'>Otros</opiton>
      </select>
    </div>
    <button type="submit">Registrar</button>
    </form>
    </center>

    <footer>
      <h4>COMPROMISOS DEL REPRSENTANTE</h4>
      <ol>
        <li>El representante debe asistira los llamados de reunión o citación que se realicen. En casocontrario se llamara a traves de protección escolar.</li>
        <li>El representante se compromete a que el alumno inscrito, en caso de ser repitiente, debe asistir a todas las materias aprobadas y no aprobadas.</li>
        <li>El alumno debe asistir diariamente con el uniforme en regla, establacido en el manual de convivencia <a href='(Art.63)'> Art.63 . <a/></li>
        <li>El alumno debe asistir al plantel con morraltransparent, segun lo establecido en el art.73, por medidas de seguridad .</li>
      </ol>
    </footer>
  </body>
</html>