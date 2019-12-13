<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:index.php");
}

class primermensajeholavista{

  function vistaregistrar($datos){
  $cad=
  '<div class="container4" id="formulario">
  <center>
  <h1>REGISTRAR USUARIO</h1>
  <form name="myform" id="myform"  enctype="multipart/form-data">

    <label>Numero de cuenta:</label><input type="text" name="numero" maxlength="7" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Numero Empleado">
    
    <label>Nombre:</label><input type="text" name="nombre" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Nombre(s)">

    <label>Apellido Paterno:</label><input type="text" name="ap" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Apellido Paterno">

    <label>Apellido Materno:</label><input type="text" name="am" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Apellido Materno">


    <label>Contraseña:</label><input type="password" name="pass" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Contraseña">

    <label>Email:</label><input type="email" name="email" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Email">
    
    <label>Tipo de usuario:</label><select name="dep" style="width: 305px" >
    <option value="">Seleccionar</option>
    <option value="Administrador General">Administrador General</option>
    <option value="Administrador Restringido">Administrador Restringido</option>
    <option value="Observador Academico">Observador Academico</option>
    <option value="Usuario">Usuario</option>
    </select><P>

    <label>Archivo</label><input type="file" name="archivo" id="archivo"></input><p>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </form>
 </div>
  ';
  return $cad;

}

/////////////////////////////////////////------PERFILES-----//////////////////////////////////////////////////
  function vistaAdministrador($datos){
       $primermensajeholavista = new primermensajeholavista;
       $hoy = $primermensajeholavista->fecha(); 
       $aux2 = $primermensajeholavista->nombreUsuario();
       $saludo = $primermensajeholavista->saludar();

  $amd='
  <h3 style="margin-left:1000px">'.$hoy.'</h3>
  <center>
      <h2 style="text-align:center; margin-bottom: 20PX;">'.$saludo.' '.$aux2.'</h2>
    <a href="nuevoUsuario.php" ><img src="media/images/nuevo.jpg" title="Agregar Usuario" width="160" height="160"  style="margin-bottom: 20PX;  border-radius: 100%;"></a>
    <a href="NuevaReserva1.php" ><img src="media/images/reserva.png" title="Reservar Aula" width="160" height="160" style="margin-bottom: 20PX;"></a>
    <a href="calendario1.php" onclick=""><img src="media/images/calendario2.png" title="Ver Calendario" width="160" height="160" style="margin-bottom: 20PX;"></a><br>
    
    <a href="#" onclick="cambiarpwd()"><img src="media/images/candado.png" title="Cambiar Contraseña" width="160" height="160" style="margin-bottom: 20PX; border-radius: 100%;"></a>
    <a href="#" onclick="DatosUsuario()"><img src="media/images/lusuarios.jpg" title="Ver Lista de Usuarios" width="160" height="160" style="margin-bottom: 20PX;border-radius: 100%;"></a>
    <a href="../sesionC.php"><img src="media/images/cerrar.png" title="Cerrar Sesión" width="160" height="160" style="margin-bottom: 20PX;"></a>
     </center>
  ';
  return $amd;
}

  function vistaAdministrador2($datos){
      $primermensajeholavista = new primermensajeholavista;
       $hoy = $primermensajeholavista->fecha(); 
       $aux2 = $primermensajeholavista->nombreUsuario();
       $saludo = $primermensajeholavista->saludar();

  $amd='
  <h3 style="margin-left:1000px">'.$hoy.'</h3>
  <center>
      <h2 style="text-align:center; margin-bottom: 20PX;">'.$saludo.' '.$aux2.'</h2>
      
   
    <a href="NuevaReserva2.php"><img src="media/images/reserva.png" title="Reservar Aula" width="160" height="160" style="margin-bottom: 20PX;"></a>
    
    <a href="calendario2.php" ><img src="media/images/calendario2.png" title="Ver Calendario" width="160" height="160" style="margin-bottom: 20PX;"></a>
    
    <a href="#" onclick="cambiarpwd2()"><img src="media/images/candado.png" title="Cambiar Contraseña" width="160" height="160" style="margin-bottom: 20PX; border-radius: 100%;"></a><br>
    
    <a href="#" onclick="DatosUsuario2()"><img src="media/images/lusuarios.jpg" title="Ver Lista de Usuarios" width="160" height="160" style="margin-bottom: 20PX;border-radius: 100%;"></a>

    <a href="../sesionC.php"><img src="media/images/cerrar.png" title="Cerrar Sesión" width="160" height="160" style="margin-bottom: 20PX;"></a>

     </center>
  ';
  return $amd;
}

  function vistaObservador($datos){
      $primermensajeholavista = new primermensajeholavista;
       $hoy = $primermensajeholavista->fecha(); 
       $aux2 = $primermensajeholavista->nombreUsuario();
       $saludo = $primermensajeholavista->saludar();

  $amd='
  <h3 style="margin-left:1000px">'.$hoy.'</h3>
  <center>
      <h2 style="text-align:center; margin-bottom: 20PX;">'.$saludo.' '.$aux2.'</h2>

    <a href="calendario3.php"><img src="media/images/calendario2.png" title="Ver Calendario" width="160" height="160" style="margin-bottom: 20PX;"></a>

    <a href="#" onclick="cambiarpwd3()"><img src="media/images/candado.png" title="Cambiar Contraseña" width="160" height="160" style="margin-bottom: 20PX; border-radius: 100%;"></a>
    
    <a href="../sesionC.php"><img src="media/images/cerrar.png" title="Cerrar Sesión" width="160" height="160" style="margin-bottom: 20PX;"></a><br>
     </center>
  ';
  return $amd;
}

  function vistaUsuario($datos){
      $primermensajeholavista = new primermensajeholavista;
      $hoy = $primermensajeholavista->fecha(); 
      $aux2 = $primermensajeholavista->nombreUsuario();
      $saludo = $primermensajeholavista->saludar();

  $amd='
  <h3 style="margin-left:1000px">'.$hoy.'</h3>
  <center>
      <h2 style="text-align:center; margin-bottom: 20PX;">'.$saludo.' '.$aux2.'</h2>

    <a href="#" onclick="VistaReservasUsuario()"><img src="media/images/calendario2.png" title="Ver Calendario" width="160" height="160" style="margin-bottom: 20PX;"></a>
    <a href="#" onclick="cambiarpwd4()"><img src="media/images/candado.png" title="Cambiar Contraseña" width="160" height="160" style="margin-bottom: 20PX; border-radius: 100%;"></a>
    <a href="../sesionC.php"><img src="media/images/cerrar.png" title="Cerrar Sesión" width="160" height="160" style="margin-bottom: 20PX;"></a><br>
     </center>
  ';
  return $amd;
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////---------------RESSERVA DE AULAS--------------//////////////////////////
  function vistaReservaAula($datos){
  $resAula='
  <div class="container4">
  <center>
  <h1>RESERVAR AULA</h1>
  <form method="post" action="guardareserva.php" id="formreserva">

    <label>Departamento o Área solicitante:</label><input type="text" name="depar" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Nombre del departamento o área solicitante">

    <label>Número del solicitante:</label><input type="text" name="numsoli" class="validate[required,custom[number]] text-input" placeholder="Número del solicitante">

    <label>Nombre del Evento:</label><input type="text" name="evento" class="validate[required,custom[onlyLetterNumberSp]] text-input" placeholder="Nombre del Evento">

    <label>Descripción:</label><input type="text" name="des" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Descripción del evento"><br>

    <label>Material Adicional:</label><input type="text" name="mate" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="¿Qué material necesitas?">

    <label>Aula:</label><select name="aula" style="width: 305px" >
    <option value="">Seleccionar</option>
    <option value="A01">A01 (40 personas)</option>
    <option value="A02">A02 (40 personas)</option>
    <option value="A03">A03 (40 personas)</option>
    <option value="A01-A02">A01 Y A02 (80 personas)</option>
    </select><P>

    <label>Tipo:</label><select name="tipo" style="width: 305px" >
    <option value="">Seleccionar</option>
    <option value="Curso">Curso</option>
    <option value="Taller">Taller</option>
    <option value="Diplomados">Diplomados</option>
    <option value="Libre">Libre/Reuniones</option>
    </select><P>
    
    <label>Fecha Evento:</label><input name="fechainicio" type="date" required style="margin-top: 10px; width: 120px;">
    <input name="fechafin" type="date" required style="margin-top: 10px; width: 120px;"><BR>
    <label>Hora Evento:</label><input type="time" name="hini" style="margin-top: 10px; width: 120px;">
    <input type="time" name="hfin" style="margin-top: 10px; width: 120px;"><BR>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </div>
  ';
  return $resAula;
}

  function vistaReservaAula2($datos){
  $resAula='
  <div class="container4">
  <center>
  <h1>RESERVAR AULA</h1>
  <form method="post" action="guardareserva2.php" id="formreserva">

    <label>Departamento o Área solicitante:</label><input type="text" name="depar" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Nombre del departamento o área solicitante">

    <label>Número del solicitante:</label><input type="text" name="numsoli" class="validate[required,custom[number]] text-input" placeholder="Número del solicitante">

    <label>Nombre del Evento:</label><input type="text" name="evento" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Nombre del Evento">

    <label>Descripción:</label><input type="text" name="des" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Descripción del evento"><br>

    <label>Material Adicional:</label><input type="text" name="mate" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="¿Qué material necesitas?">

    <label>Aula:</label><select name="aula" style="width: 305px" >
    <option value="">Seleccionar</option>
    <option value="A01">A01 (40 personas)</option>
    <option value="A02">A02 (40 personas)</option>
    <option value="A03">A03 (40 personas)</option>
    <option value="A01-A02">A01 Y A02 (80 personas)</option>
    </select><P>

    <label>Tipo:</label><select name="tipo" style="width: 305px" >
    <option value="">Seleccionar</option>
    <option value="Curso">Curso</option>
    <option value="Taller">Taller</option>
    <option value="Diplomados">Diplomados</option>
    <option value="Libre">Libre/Reuniones</option>
    </select><P>
    
    <label>Fecha Evento:</label><input name="fechainicio" type="date" required style="margin-top: 10px; width: 120px;">
    <input name="fechafin" type="date" required style="margin-top: 10px; width: 120px;"><BR>
    <label>Hora Evento:</label><input type="time" name="hini" style="margin-top: 10px; width: 120px;">
    <input type="time" name="hfin" style="margin-top: 10px; width: 120px;"><BR>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="#" onclick="perfiladmin2()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </div>
  ';
  return $resAula;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////----------CAMBIAR CONTRASEÑA----------------//////////////////////////////
function vistacambiar($datos){
  $cambio='
  <div class="container4">
  <center>
  <h1>CAMBIO DE CONTRASEÑA</h1>
  <form method="post" action="./actualiza1.php" id="myform" enctype="multipart/form-data">
    
    <label>Contraseña:</label><input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Ingresa Nueva Contraseña" style="width: 265px;margin-left: -24px"><br>
 
    <button class="btn btn-primary" id="btn" type="button" onclick="mostrarContrasena()" style="background-color:#9bed38; border-color: #9bed38; border-radius: 10px; float: right;margin-top:-48px; margin-right:473px"><img src="media/images/ojo.png" style="width: 20px; margin-top: 3.1px;margin-bottom: 3.1px; margin-right:3px; margin-left: 12px"></button>
    
    <input type="submit" value="Guardar" style="margin-left: 2px;"><br>
    <a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:37px;"></a></center>
 </div>
  ';
  return $cambio;
}

function vistacambiar2($datos){
  $cambio='
  <div class="container4">
  <center>
  <h1>CAMBIO DE CONTRASEÑA</h1>
  <form method="post" action="./actualiza2.php" id="myform" enctype="multipart/form-data">
    
 <label>Contraseña:</label><input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Ingresa Nueva Contraseña" style="width: 265px;margin-left: -24px"><br>
 
    <button class="btn btn-primary" id="btn" type="button" onclick="mostrarContrasena()" style="background-color:#9bed38; border-color: #9bed38; border-radius: 10px; float: right;margin-top:-48px; margin-right:473px"><img src="media/images/ojo.png" style="width: 20px; margin-top: 3.1px;margin-bottom: 3.1px; margin-right:3px; margin-left: 12px"></button>    
    <input type="submit" value="Guardar" style="margin-left: 2px;"><br>

    <a href="#" onclick="perfiladmin2()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:37px;"></a></center>
 </div>
  ';
  return $cambio;
}

function vistacambiar3($datos){
  $cambio='
  <div class="container4">
  <center>
  <h1>CAMBIO DE CONTRASEÑA</h1>
  <form method="post" action="./actualizaPWD.php" id="myform3">
    
    <label>Contraseña:</label><input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Ingresa Nueva Contraseña" style="width: 265px;margin-left: -24px"><br>
 
    <button class="btn btn-primary" id="btn" type="button" onclick="mostrarContrasena()" style="background-color:#9bed38; border-color: #9bed38; border-radius: 10px; float: right;margin-top:-48px; margin-right:473px"><img src="media/images/ojo.png" style="width: 20px; margin-top: 3.1px;margin-bottom: 3.1px; margin-right:3px; margin-left: 12px"></button>
    
    <input type="submit" value="Guardar" style="margin-left: 2px;"><br>
    <a href="#" onclick="perfilobs()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:37px;"></a></center>
 </div>
  ';
  return $cambio;
}

function vistacambiar4($datos){
  $cambio='
  <div class="container4">
  <center>
  <h1>CAMBIO DE CONTRASEÑA</h1>
  <form method="post" action="./actualiza4.php" id="myform" enctype="multipart/form-data">
    
    <label>Contraseña:</label><input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Ingresa Nueva Contraseña" style="width: 265px;margin-left: -24px"><br>
 
    <button class="btn btn-primary" id="btn" type="button" onclick="mostrarContrasena()" style="background-color:#9bed38; border-color: #9bed38; border-radius: 10px; float: right;margin-top:-48px; margin-right:473px"><img src="media/images/ojo.png" style="width: 20px; margin-top: 3.1px;margin-bottom: 3.1px; margin-right:3px; margin-left: 12px"></button>
    
    <input type="submit" value="Guardar" style="margin-left: 2px;"><br>
    <a href="#" onclick="perfilusua()"><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:37px;"></a></center>
 </div>
  ';
  return $cambio;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function bucarReserva($datos){
  $buscar=' <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script>

  <center><h1>CALENDARIO DE RESERVAS ADMINISTRADOR GENERAL</h1></center>
    
    <form name="myform2" id="myform2">
    
    <select name="mes" style="width: 205px" class="validate[required] text-input">
    <option value="0">Seleccionar Mes</option>
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Junio</option>
    <option value="07">Julio</option>
    <option value="08">Agosto</option>
    <option value="09">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
    </select>

    <label>Dia:</label><select name="an" style="width: 205px;margin-left:30px" class="validate[required] text-input">
    <option value="0">Seleccionar Año</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    </select>

    <select name="aula" style="width: 205px;margin-left:30px" class="validate[required] text-input">
    <option value="0">Seleccionar Aula</option>
    <option value="A01">A01</option>
    <option value="A02">A02</option>
    <option value="A03">A03</option>
    <option value="A01-A02">A01-A02</option>
    </select>

    <input type="submit" value="Buscar" onclick="Buscar()" style="margin-left:30px;"><br>

 </form>

            <div id="demo">
            <form id="resadm">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                        <th>NÚMERO RESERVA</th>
                        <th>NOMBRE EVENTO</th>
                        <th>TIPO EVENTO</th>
                        <th>AULA</th>
                        <th>DETALLES</th>
                        <th>MODIFICAR</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                <th><center><a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </form>
      </center>';
       return $buscar;
}


function fecha(){
      $Mestemp=date("m");
      $months = array (1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
      $fechaAct=date("d") . " de " . $months[(int)$Mestemp] . " de " . date("Y");
      return $fechaAct;
}

function nombreUsuario(){
  $cn = mysqli_connect("localhost","root","","reservaunam");
  $query =" SELECT emailTemp FROM sesion";
        $resultado = $cn->query($query);
        while($row = $resultado->fetch_assoc()){
        $aux = ($row['emailTemp']); 
        } 

        $query2 =" SELECT nombre FROM usuarios where email='$aux'";
        $resultado2 = $cn->query($query2);
        while($row = $resultado2->fetch_assoc()){
        $auxiliar = ($row['nombre']); 
        }
      return $auxiliar;
}

function saludar(){
  $hora=date("G");
        
        if($hora < 6){
        $saludos = "Buenos noches,";
        }
        else if($hora < 18 ){
        $saludos = "Buenas días,";
        }
        else{
        $saludos = "Buenas tardes,";
        }
  return $saludos;
}



}

?>
