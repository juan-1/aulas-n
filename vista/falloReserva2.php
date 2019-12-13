<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Fallo | UNAM</title>

        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="media/css/demo_table.css" />

</head>
    <body style="background-color:white">
 <div style="background-color: #ff7e71; height: 60px;"><center></br><h2 style="color: #e11f0c;">¡¡Hora ó Fecha no disponible!!</h2></center></div>
        <a href="NuevaReserva2.php" ><img src="media/images/regreso.png" width="95" height="50" style=" margin-right:640px; float:right;margin-top: 20px"></a>
    </body>
</html>