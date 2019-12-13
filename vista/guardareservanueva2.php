<?php
$Nreserva=$_POST['numero'];
$numS=$_POST['numsoli'];/////////////////
$area=$_POST['depar'];//
$nomE=$_POST['evento'];//
$descrip=$_POST['des'];//
$matExt=$_POST['mate'];//
$aula=$_POST['aula'];
$tipo=$_POST['tipo'];//
$fechaI=$_POST['fechainicio'];//
$fechaF=$_POST['fechafin'];//
$horaI=$_POST['hini'];//
$horaF=$_POST['hfin'];

$cn = mysqli_connect("localhost","root","","reservaunam");
@mysqli_query("SET NAMES 'utf8'",$cN);

$sql = "UPDATE reservas SET departamento='$area', nombreEve='$nomE',descrip='$descrip',material='$matExt',tipo='$tipo',fechaI='$fechaI',fechaF='$fechaF',horaI='$horaI',horaF='$horaF',fk_numAula='$aula',fk_numUsu='$numS' WHERE numero_reserva='$Nreserva'";

$resent=mysqli_query($cn,$sql);
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
        <div style="background-color: #ff7e71; height: 60px;"><center></br><h2 style="color: #e11f0c;">¡¡Algo salío mal!!</h2></center></div>
        <a href="calendario2.php" ><img src="media/images/regreso.png" width="95" height="50" style=" margin-right:640px; float:right;margin-top: 20px"></a>
    </body>
</html>';
	}else {	
		echo '<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Guardado | UNAM</title>

        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="media/css/demo_table.css" />

</head>
    <body style="background-color:white">
        <div style="background-color: #b6fe8c; height: 60px;"><center></br><h2 style="color: #4bbb0a;">¡¡Guardado Exitosamente!!</h2></center></div>
        <a href="calendario2.php" ><img src="media/images/regreso.png" width="95" height="50" style=" margin-right:640px; float:right;margin-top: 20px"></a>
    </body>
</html>';

		
	}

?>