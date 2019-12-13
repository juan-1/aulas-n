<?php
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/procesaParametros.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/objetos/objetousuarios.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/objetos/objetousuarios2.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/sqllistadao.php";
class mostrarlistadodao{

	private $con;

	function __construct(){
		$this->con=conexion::conectar();
	}
	function __destruct(){
		$this->con->close();
	}
	
////////////////////////////////RESERVAS ADMINISTRADOR 1/////////////////////////////////////////////////////
	function BuscarDao($modulo){
  $cn = mysqli_connect("localhost","root","","reservaunam");
  $query="SELECT numero_reserva, nombreEve, tipo, fk_numAula FROM reservas WHERE YEAR( fechaI ) = '$modulo->Vano' and MONTH(fechaI) = '$modulo->Vmes' and fk_numAula= '$modulo->Vaula'";
      $resultado = $cn->query($query);
	

	echo '     <script type="text/javascript" charset="utf-8"> 
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
                <tbody>';
    while($row = $resultado->fetch_assoc()){  
    $listas=new objetoMensajehola();
    echo ' 
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_reserva'].'</td>
                       <td>'.$listas->VNombres=$row['nombreEve'].'</td>
                       <td>'.$listas->VCarrera=$row['tipo'].'</td>
                       <td>'.$listas->VTipo=$row['fk_numAula'].'</td>
                       <td><a type="submit" href="constancia/reporteEvento.php? clave='.$row['numero_reserva'].'" <center><img src="media/images/gaf.ico" width="20" height="20" style="margin-top:10px;"></center></a>
                       <td><a type="submit" href="actualizaRes.php? clave='.$row['numero_reserva'].'" <center><img src="media/images/fle.png" width="20" height="20" style="margin-top:10px;"></center></a>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </form>
      </center>';


}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////RESERVAS ADMINISTRADOR 2/////////////////////////////////////////////
function BuscarDao2($modulo){
  $datosArray=array($modulo);
  $pP=procesaParametros::PrepareStatement(usuariosSql::listausuarios2(),$datosArray);
  $query=$this->con->query($pP);
  $query->data_seek(0);
  $row=$query->fetch_array();  


  echo '
      <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script> 
            <center><h1>CALENDARIO DE RESERVAS ADMINISTRADOR RESTRINGIDO</h1></center>
                   <div id="demo">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                        <th>NUMERO RESERVA</th>
                        <th>NOMBRE EVENTO</th>
                        <th>TIPO EVENTO</th>
                        <th>AULA</th>
                        <th>DETALLES</th>
                    </tr>
                </thead>
                <tbody>';
    while($row=mysqli_fetch_array($query)){   
    $listas=new objetoMensajehola();
    echo '
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_reserva'].'</td>
                       <td>'.$listas->VNombres=$row['nombreEve'].'</td>
                       <td>'.$listas->VCarrera=$row['tipo'].'</td>
                       <td>'.$listas->VTipo=$row['fk_numAula'].'</td>
                       <td><a type="submit" href="constancia/reporteEvento.php? clave='.$row['numero_reserva'].'" <center><img src="media/images/gaf.ico" width="20" height="20" style="margin-top:10px;"></center></a>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfiladmin2()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </center>';


}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////RESERVAS OBSERVADOR ACADEMICO/////////////////////////////////////////////
function BuscarDao4($modulo){
  $datosArray=array($modulo);
  $pP=procesaParametros::PrepareStatement(usuariosSql::listausuarios3(),$datosArray);
  $query=$this->con->query($pP);
  $query->data_seek(0);
  $row=$query->fetch_array();  


  echo '
      <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script> 
            <center><h1>CALENDARIO DE RESERVAS NIVEL OBSERVADOR</h1></center>
                   <div id="demo">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                       <th>NUMERO RESERVA</th>
                        <th>NOMBRE EVENTO</th>
                        <th>TIPO EVENTO</th>
                        <th>AULA</th>
                        <th>DETALLES</th>
                    </tr>
                </thead>
                <tbody>';
    while($row=mysqli_fetch_array($query)){   
    $listas=new objetoMensajehola();
    echo '
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_reserva'].'</td>
                       <td>'.$listas->VNombres=$row['nombreEve'].'</td>
                       <td>'.$listas->VCarrera=$row['tipo'].'</td>
                       <td>'.$listas->VTipo=$row['fk_numAula'].'</td>
                       <td><a type="submit" href="constancia/reporteEvento.php? clave='.$row['numero_reserva'].'" <center><img src="media/images/gaf.ico" width="20" height="20" style="margin-top:10px;"></center></a>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfilobs()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </form>
      </center>';


}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////RESERVAS USUARIO ORINARIO//////////////////////////////////////////////////
function BuscarDao5($modulo){

      $cn = mysqli_connect("localhost","root","","reservaunam");
         $query1 =" SELECT emailTemp FROM sesion;";
         $resultado = $cn->query($query1);
         while($row = $resultado->fetch_assoc()){
         $aux = ($row['emailTemp']); 
         }     

         $query2="SELECT numero_usuario FROM usuarios WHERE email='$aux';";
         $resultado2 = $cn->query($query2);
         while($row = $resultado2->fetch_assoc()){
         $aux2 = ($row['numero_usuario']); 
         }          

  $query= "SELECT * FROM reservas where fk_numUsu='$aux2' ";
    $resultado = $cn->query($query);

  echo '
      <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script> 
            <center><h1>CALENDARIO DE RESERVAS NIVEL USUARIO</h1></center>
                   <div id="demo">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                        <th>NUMERO RESERVA</th>
                        <th>NOMBRE EVENTO</th>
                        <th>TIPO EVENTO</th>
                        <th>AULA</th>
                        <th>DETALLES</th>
                    </tr>
                </thead>
                <tbody>';
    //while($row=mysqli_fetch_array($query)){ 
    while($row = $resultado->fetch_assoc()){  
    $listas=new objetoMensajehola();
    echo '
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_reserva'].'</td>
                       <td>'.$listas->VNombres=$row['nombreEve'].'</td>
                       <td>'.$listas->VCarrera=$row['tipo'].'</td>
                       <td>'.$listas->VTipo=$row['fk_numAula'].'</td>
                       <td><a type="submit" href="constancia/reporteEvento.php? clave='.$row['numero_reserva'].'" <center><img src="media/images/gaf.ico" width="20" height="20" style="margin-top:10px;"></center></a>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfilusua()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </form>
      </center>';


}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////DATOS USUARIO ADMINISTRADOR///////////////////////////////////////// este 
function BuscarDao3($modulo){
  $datosArray=array($modulo);
  $pP=procesaParametros::PrepareStatement(usuariosSql::listausuariosM(),$datosArray);
  $query=$this->con->query($pP);
  $query->data_seek(0);
  $row=$query->fetch_array();  

  echo ' <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script> 
            <center><h1>DATOS DE USUARIO</h1></center>
                   <div id="demo">
                   <form id="usuarioslista">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                        <th>CLAVE</th>
                        <th>NOMBRE DE USUARIO</th>
                        <th>TIPO DE USUARIO</th>
                        <th>CONTRASEÑA ACTUAL</th>
                        <th>¿CONTRASEÑA MODIFICADA?</th>
                        <th>MODIFICAR</th>
                    </tr>
                </thead>
                <tbody>';
    while($row=mysqli_fetch_array($query)){   
    $listas=new objetoMensajehola();
    echo '
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_usuario'].'</td>
                       <td>'.$listas->VNombres=$row['nombre'].'  '.$row['paterno'].'  '.$row['materno'].'</td>
                       <td>'.$listas->VTipo=$row['tipoUsu'].'</td>
                       <td>'.$listas->VSemestre=$row['contrasena'].'</td>
                       <td>'.$listas->VHorario=$row['modif'].'</td>
                        <td><a type="submit" href="actualizaUsuario.php? clave='.$row['numero_usuario'].'" <center><img src="media/images/fle.png" width="20" height="20" style="margin-top:10px; margin-left:35px"></center></a>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfiladmin()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>

      </table>
      </div>
       </form>
      </center>';


}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////DATOS USUARIO ADMINISTRADOR/////////////////////////////////////////
function BuscarDaoAd2($modulo){
  $datosArray=array($modulo);
  $pP=procesaParametros::PrepareStatement(usuariosSql::listausuariosM2(),$datosArray);
  $query=$this->con->query($pP);
  $query->data_seek(0);
  $row=$query->fetch_array();  

  echo ' <script type="text/javascript" charset="utf-8"> 
      $(document).ready(function() {
        $(example).dataTable({
         "oLanguage": {
         "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
      } );
    </script> 
            <center><h1>DATOS DE USUARIO</h1></center>
                   <div id="demo">
                   <form id="usuarioslista">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                <thead>
                    <tr>
                        <th>CLAVE</th>
                        <th>NOMBRE DE USUARIO</th>
                        <th>TIPO DE USUARIO</th>
                        <th>EMAIL</th>
                    </tr>
                </thead>
                <tbody>';
    while($row=mysqli_fetch_array($query)){   
    $listas=new objetoMensajehola();
    echo '
                       <tr class="success">
                       <td>'.$listas->VMatricula=$row['numero_usuario'].'</td>
                       <td>'.$listas->VNombres=$row['nombre'].'  '.$row['paterno'].'  '.$row['materno'].'</td>
                       <td>'.$listas->VTipo=$row['tipoUsu'].'</td>
                       <td>'.$listas->VSemestre=$row['email'].'</td>
                       </tr>';        
//}
//return $listas;
}
echo '</tbody>
      <tfoot>
            <tr>
                <th><center><a href="#" onclick="perfiladmin2()"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>

      </table>
      </div>
       </form>
      </center>';


}

/////////////////////////////////////////////////////////////////////////////////////////////////////////
}
?>