<?php

session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:vista/index.php");
}

$hostname_localhost ="localhost";
$database_localhost ="reservaunam";
$username_localhost ="root";
$password_localhost ="";
		
 		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
 		$query="DELETE FROM sesion;";
    	$resultado = $conexion->query($query);  
    	session_destroy();
    	header("location:vista/index.php");
    	// echo "<script>location.href='index.php'</script>";


?>
