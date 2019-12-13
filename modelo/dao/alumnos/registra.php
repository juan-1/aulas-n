<?php
class alumnossql{
	function Regalumno(){
$query="INSERT INTO empleados (numero_empleado,paterno,materno,nombre,fecha_contrato,Status,fk_departamento,fk_puesto,fk_horario) VALUES (?,?,?,?,?,'Activo',?,?,?);";
		return $query;
	}
}
?>