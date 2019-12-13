<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:index.php");
}
$numero=$_POST['num'];

$conectar=mysqli_connect("localhost","root","") or die ("Error al conectar");
    mysqli_select_db($conectar,"reservaunam");

@mysqli_query("SET NAMES 'utf8'",$conectar);
 $sql = "DELETE FROM reservas WHERE numero_reserva=$numero;";

	$resent=mysqli_query($conectar,$sql);
	 if ($resent==null) {
	 	echo '<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Fallo | UNAM</title>

        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="media/css/demo_table.css" />

</head>
    <body style="background-color:white">
     <div style="background-color: #ff7e71; height: 60px;"><center></br><h2 style="color: #e11f0c;">¡¡Error, No se pudo eliminar!!</h2></center></div>
        <a href="admin2.php" ><img src="media/images/regreso.png" width="95" height="50" style=" margin-right:640px; float:right;margin-top: 20px"></a>
    </body>
</html>';
	}else{
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo '<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Guardado | UNAM</title>

        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="media/css/demo_table.css" />

</head>
    <body style="background-color:white">
 <div style="background-color: #b6fe8c; height: 60px;"><center></br><h2 style="color: #4bbb0a;">¡¡Eliminado Exitosamente!!</h2></center></div>
        <a href="admin2.php" ><img src="media/images/regreso.png" width="95" height="50" style=" margin-right:640px; float:right;margin-top: 20px"></a>
    </body>
</html>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
}


?>