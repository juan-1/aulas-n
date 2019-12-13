<?php

class usuariosSql{
		
	public static function listausuarios1(){
	$query= "SELECT * FROM vista_reservas";
	return $query;	
	}

	public static function listausuarios2(){
	$query= "SELECT * FROM vista_reservas";
	return $query;	
	}

	public static function listausuarios3(){
	$query= "SELECT * FROM vista_reservas";
	return $query;	
	}

	// public static function listausuarios4(){
	// 	$cn = mysqli_connect("localhost","root","","reservaunam");
 //        $query1 =" SELECT emailTemp FROM sesion";
 //        $resultado = $cn->query($query1);
 //        while($row = $resultado->fetch_assoc()){
 //        $aux = ($row['emailTemp']); 
 //        } 		

	// $query= "SELECT * FROM reservas where fk_numUsu='1112' ";
	// return $query;	
	// }

	public static function listausuariosM(){
		$query= "SELECT * FROM datosusuarios2";
	return $query;	
	}

	public static function listausuariosM2(){
	$query= "SELECT * FROM usuarios";
	return $query;	
	}
	
}
?>