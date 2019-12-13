<?php
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/vista/misvistas/vistashtml.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/moduloalumnos.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/listadodao.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/sqllistadao.php";
class ModuloMensajeHolabo{
	private $vista;
	private $dao;

	
	function __construct(){
		$this->vista=new primermensajeholavista(); 
		$this->dao=new alumnosdao();
		$this->dao2=new mostrarlistadodao();

	}
//------------------------MUESTRA FORMULARIO--------------------------------
	function mifuncionregistrabo($r){
		return $this->vista->vistaregistrar($r);
	}

	function perfilAdmistrador($r){
		return $this->vista->vistaAdministrador($r);
	}

	function perfilAdmistrador2($r){
	return $this->vista->vistaAdministrador2($r);
	}

	function perfilObservador($r){
	return $this->vista->vistaObservador($r);
	}

	function perfilUsuario($r){
	return $this->vista->vistaUsuario($r);
	}

	function mifuncionreserva($r){
	return $this->vista->vistaReservaAula($r);
	}

	function mifuncionreserva2($r){
	return $this->vista->vistaReservaAula2($r);
	}

	function mifuncionpwdbo($r){
	return $this->vista->vistacambiar($r);
	}	

	function mifuncionpwdbo2($r){
	return $this->vista->vistacambiar2($r);
	}

	function mifuncionpwdbo3($r){
	return $this->vista->vistacambiar3($r);
	}

	function mifuncionpwdbo4($r){
	return $this->vista->vistacambiar4($r);
	}
//-------------------------AGREGAR NUEVO USUARIO----------------------------
	function mifuncionregistraalumnosbo($modulo){
		$mensaje=$this->dao->insertarAlumnosdao($modulo);
		return $mensaje;
	}
//--------------------------------------------------------------------------



//-------------------------RESERVAS ADMINISTRADOR-----------------------------------
		function muestraReservasAdmin($modulo){
		$object=$this->dao2->BuscarDao($modulo);
	}
//-------------------------RESERVAS ADMINISTRADOR 2-----------------------------------
		function muestraReservasAdmin2($modulo){
		$object=$this->dao2->BuscarDao2($modulo);
	}

//-------------------------RESERVAS OBSERVADOR -----------------------------------
		function muestraReservasObs($modulo){
		$object=$this->dao2->BuscarDao4($modulo);
	}

//-------------------------RESERVAS USUARIO-----------------------------------
		function muestraReservasUsua($modulo){
		$object=$this->dao2->BuscarDao5($modulo);
	}

//-------------------------DATOS DE USUARIO--------------------------------
		function muestraDatosUsuario($modulo){
		$object=$this->dao2->BuscarDao3($modulo);
	}

		function muestraDatosUsuario2($modulo){
		$object=$this->dao2->BuscarDaoAd2($modulo);
	}
//-------------------------CALENDARIO PREVIO--------------------------------
		function cargarValores1($r){
		return $this->vista->bucarReserva($r);
	}



















//-------------------------SOCIOS VESPERTINO--------------------------------
		function registraTurnoV($modulo){
		$object=$this->dao2->BuscarDao4($modulo);
	}
//-------------------------SOCIOS NOCTURNO--------------------------------
		function registraTurnoN($modulo){
		$object=$this->dao2->BuscarDao5($modulo);
	}

}
?>