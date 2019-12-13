<?php
	session_start();
	$email=$_GET['usua'];
	$pass=$_GET['contra'];



$hostname_localhost ="localhost";
$database_localhost ="reservaunam";
$username_localhost ="root";
$password_localhost ="";


				
 		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

 		$query="SELECT tipoUsu,contrasena from usuarios where email='$email' and contrasena='$pass';";

    
    $resultado = $conexion->query($query);  
    $numfilas = $resultado->num_rows;


		if($numfilas==0){
						    echo "<script>alert('Datos incorrectos');</script>";
						    echo "<script>location.href='vista/index.php'</script>";
		}else{	
			while($row = $resultado->fetch_assoc()){
	    	$tip = ($row['tipoUsu']);
	    	$cont = ($row['contrasena']);
	    	}			    
	    		$_SESSION['usuario']=$email;

	    if ($pass==$cont) {
 		$query2="INSERT INTO sesion (emailTemp,contrasenaTemp) VALUES ('$email','$pass');";
    	$resultado2 = $conexion->query($query2);  
			///////////////////////////////////////////////////////////////////////////////
						if ($tip=='Administrador General') {
							header("location:vista/index2.php");
							// echo "<script>location.href='vista/index2.php'</script>";
						}elseif($tip=='Administrador Restringido'){
							header("location:vista/admin2.php");
							// echo "<script>location.href='vista/admin2.php'</script>";
						}elseif($tip=='Observador Academico'){
							header("location:vista/observador.php");
 							// echo "<script>location.href='vista/observador.php'</script>";
						}elseif($tip=='Usuario'){
							header("location:vista/usuario.php");
 							// echo "<script>location.href='vista/usuario.php'</script>";
						}
		}else{
		  echo "<script>alert('Contraseña incorrecta');</script>";
		 echo "<script>location.href='vista/index.php'</script>";
		}
			//////////////////////////////////////////////////////////////////////////////////
		}


?>

