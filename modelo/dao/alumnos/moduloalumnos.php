<?php
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/registra.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/procesaParametros.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/objetos/objetousuarios.php";
require_once $_SERVER['DOCUMENT_ROOT'].Unidadtres::tres."/modelo/dao/alumnos/sqllistadao.php";
class alumnosdao{

	private $con;

	function __construct(){
		$this->con=conexion::conectar();
	}
	function __destruct(){
		$this->con->close();
	}


	function insertarAlumnosdao($modulo){
		$datosArray=array($modulo->VMatricula,$modulo->VNombres,$modulo->VCarrera,$modulo->VTipo,$modulo->VSemestre,$modulo->VGrupo,$modulo->VTurno,$modulo->VIngreso);

		$pP=procesaParametros::PrepareStatement(alumnossql::Regalumno(),$datosArray);
		$query=$this->con->query($pP);
	}

}


?>