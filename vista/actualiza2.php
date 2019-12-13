<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:index.php");
}
$newPassword= $_POST['pass'];

$cn = mysqli_connect("localhost","root","","reservaunam");
        $query =" SELECT emailTemp FROM sesion";
        $resultado = $cn->query($query);
        while($row = $resultado->fetch_assoc()){
        $aux = ($row['emailTemp']); 
        } 		


$sql = "UPDATE usuarios SET contrasena='$newPassword', modif='Si' WHERE email='$aux'";

$resent=mysqli_query($cn,$sql);
	if ($resent==null) {
		echo ' <script language="javascript">alert("¡¡Algo fallo!!");</script> ';
		echo "<script>location.href='admin2.php'</script>";
	}else {	
		echo ' <script language="javascript">alert("¡¡Contraseña Actualizada!!");</script> ';
		echo "<script>location.href='admin2.php'</script>";

		
	}

?>