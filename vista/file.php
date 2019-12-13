
<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.
 
 $nombre=$_FILES['archivo']['name'];
 $cuenta=$_POST['numero'];
 $nom=$_POST['nombre'];
 $ap=$_POST['ap'];
 $am=$_POST['am'];
 $passw=$_POST['pass'];
 $email=$_POST['email'];
 $tipo=$_POST['dep'];
 $modi='No';
 $direcion= 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/' .$nombre;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $conectar=mysqli_connect("localhost","root","") or die ("Error al conectar");
    mysqli_select_db($conectar,"reservaunam");
@mysqli_query("SET NAMES 'utf8'",$conectar);
 $sql = "INSERT INTO usuarios (numero_usuario,paterno,materno,nombre,contrasena,email,tipoUsu,ruta,modif) VALUES ('$cuenta','$ap','$am','$nom','$passw','$email','$tipo','$direcion','$modi');";

	//mysqli_query($conectar,$sql);
	$resent=mysqli_query($conectar,$sql);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ($resent==null) {
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	echo ' <script language="javascript">alert("Error");</script> ';
	header("location: exitosoN1.php");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}else{

	// $mensaje='Bienvenido '.$nom.'. Los datos para que puedas acceder al sistema son: Usuario= '.$email.'  Contraseña= '.$passw;
	// $asunto='Datos para acceso al sistema';
	// mail($email, $asunto, $mensaje);


	$target_path = "C:/xampp/htdocs/resunam/vista/constancia/imagenes/";
	$target_path = $target_path . basename( $_FILES['archivo']['name']); 
	if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {

	echo ' <script language="javascript">alert("Capturado");</script> ';
	header("location: exitosoN1.php");

	} else{
    echo ' <script language="javascript">alert("El fichero que intentas subir no es valido");</script> ';
    header("location: falloNU.php");

	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////77
}

 

?>
<!-- <script>

window.location='https://iikim.com';

</script>
 -->