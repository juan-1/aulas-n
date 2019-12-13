<?php
$nombre=$_FILES['archivo']['name'];
$numero=$_POST['numero'];
$pat=$_POST['ap'];/////////////////
$mat=$_POST['am'];//
$nom=$_POST['nombre'];//
$emai=$_POST['email'];//
$tipo=$_POST['dep'];//
$direcion= 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/' .$nombre;

if (empty($nombre)){
	$cn = mysqli_connect("localhost","root","","reservaunam");
	@mysqli_query("SET NAMES 'utf8'",$cN);

$sql = "UPDATE usuarios SET numero_usuario='$numero', paterno='$pat',materno='$mat',nombre='$nom',email='$emai',tipoUsu='$tipo' WHERE numero_usuario='$numero'";

$resent=mysqli_query($cn,$sql);
	if ($resent==null) {
		echo "<script>location.href='falloCambio.php'</script>";
	}else {	
		echo "<script>location.href='exitosoCambio.php'</script>";

		
	}
	}else{


$cn = mysqli_connect("localhost","root","","reservaunam");
@mysqli_query("SET NAMES 'utf8'",$cN);

$sql = "UPDATE usuarios SET numero_usuario='$numero', paterno='$pat',materno='$mat',nombre='$nom',email='$emai',tipoUsu='$tipo', ruta='$direcion' WHERE numero_usuario='$numero'";

$resent=mysqli_query($cn,$sql);
	if ($resent==null) {
		echo "<script>location.href='falloCambio.php'</script>";
	}else {	
		echo "<script>location.href='exitosoCambio.php'</script>";

		
	}

	$target_path = "C:/xampp/htdocs/resunam/vista/constancia/imagenes/";
	$target_path = $target_path . basename( $_FILES['archivo']['name']); 
	if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {

	echo ' <script language="javascript">alert("Capturado");</script> ';
	header("location: exitosoN1.php");

	} else{
    echo ' <script language="javascript">alert("El fichero que intentas subir no es valido");</script> ';
    header("location: falloNU.php");

	}
}

?>