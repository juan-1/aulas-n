<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/bo/mensajeHolabo.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/objetos/objetousuarios.php";

$bo=new ModuloMensajeHolabo(); 
switch($_REQUEST['action']){

////////////////////////////////// VISTAS DATATABLE RESERVAS /////////////////////////////////////
case "ReservasAdmin":
$mensaje=new objetoMensajehola();
$r=$bo->cargarValores1($mensaje);
print $r;
break;

case "ReservasAdmin2":
$msg=new objetoMensajehola();
$r=$bo->muestraReservasAdmin2($msg);
print $r;
break;

case "calendarioObs":
$msg=new objetoMensajehola();
$r=$bo->muestraReservasObs($msg);
print $r;
break;

case "calendarioUsua":
$msg=new objetoMensajehola();
$r=$bo->muestraReservasUsua($msg);
print $r;
break;
//////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////
case "nuevo":
$msg=new objetoMensajehola();
$r=$bo->mifuncionregistrabo($msg);
print $r;
break;

case "cambiarpwd":
$msg=new objetoMensajehola();
$r=$bo->mifuncionpwdbo($msg);
print $r;
break;

case "cambiarpwd2":
$msg=new objetoMensajehola();
$r=$bo->mifuncionpwdbo2($msg);
print $r;
break;

case "cambiarpwd3":
$msg=new objetoMensajehola();
$r=$bo->mifuncionpwdbo3($msg);
print $r;
break;

case "cambiarpwd4":
$msg=new objetoMensajehola();
$r=$bo->mifuncionpwdbo4($msg);
print $r;
break;

case "reservarAulas":
$msg=new objetoMensajehola();
$r=$bo->mifuncionreserva($msg);
print $r;
break;

case "reservarAulas2":
$msg=new objetoMensajehola();
$r=$bo->mifuncionreserva2($msg);
print $r;
break;

///////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////VISTA PERFILES DE USUARIO////////////////////////////////
case "administrador1":
$msg=new objetoMensajehola();
$r=$bo->perfilAdmistrador($msg);
print $r;
break;

case "administrador2":
$msg=new objetoMensajehola();
$r=$bo->perfilAdmistrador2($msg);
print $r;
break;

case "observador":
$msg=new objetoMensajehola();
$r=$bo->perfilObservador($msg);
print $r;
break;

case "usuario":
$msg=new objetoMensajehola();
$r=$bo->perfilUsuario($msg);
print $r;
break;

////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////VISTAS DATOS USUARIO////////////////////////////////////
case "DatosUsu":
$msg=new objetoMensajehola();
$r=$bo->muestraDatosUsuario($msg);
print $r;
break;

case "DatosUsu2":
$msg=new objetoMensajehola();
$r=$bo->muestraDatosUsuario2($msg);
print $r;
break;

////////////////////////////////////////////////////////////////////////////////////////////
case "listar":
$modulo = new objetoMensajehola();
$modulo->Vmes=$_POST['mes'];
$modulo->Vano=$_POST['an'];
$modulo->Vaula=$_POST['aula'];
$r=$bo->muestraReservasAdmin($modulo);
print $r;
break;



}

?>