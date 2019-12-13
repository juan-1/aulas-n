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
		echo "<script>location.href='falloAR.php'</script>";
	}else {	
		echo "<script>location.href='exitosoAC.php'</script>";

		
	}

?>