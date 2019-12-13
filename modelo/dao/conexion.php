<?php
class conexion{
	private static $host="localhost";
	private static $user="root";
	private static $pass="";
	private static $bd="reservaunam";

public static function conectar(){
	return mysqli_connect(conexion::$host,conexion::$user,conexion::$pass,conexion::$bd);	
}
}
?>
