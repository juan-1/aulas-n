<?php
$numS=$_POST['numsoli'];/////////////////
$area=$_POST['depar'];//
$nomE=$_POST['evento'];//
$descrip=$_POST['des'];//
$matExt=$_POST['mate'];//
$aula=$_POST['aula'];/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$tipo=$_POST['tipo'];//
$fechaI=$_POST['fechainicio'];//
$fechaF=$_POST['fechafin'];//
$horaI=$_POST['hini'];//
$horaF=$_POST['hfin'];//
$reg='1';

 $conectar=mysqli_connect("localhost","root","") or die ("Error al conectar");
    mysqli_select_db($conectar,"reservaunam");
	@mysqli_query("SET NAMES 'utf8'",$conectar);
	//////////////////////////////////////////////////////////AULAS A01 Y AO2///////////////////////////////////////////////////////////////////////////////
	if ($aula=='A01' || $aula=='A02') {
		$consulta1="SELECT * FROM `reservas` WHERE (fechaI BETWEEN '$fechaI' AND '$fechaF') AND (horaI>='$horaI' AND horaI<='$horaF') AND (fk_numAula='$aula' OR fk_numAula='A01-A02')";
	$resultado1 = $conectar->query($consulta1);  
	$numfilas1 = $resultado1->num_rows;
		
		if ($numfilas1<=0) {
			
	$consulta2="SELECT * FROM `reservas` WHERE (fechaF BETWEEN '$fechaI' AND '$fechaF') AND (horaF>='$horaI' AND horaF<='$horaF') AND (fk_numAula='$aula' OR fk_numAula='A01-A02')";
	$resultado2 = $conectar->query($consulta2);
	$numfilas2 = $resultado2->num_rows;  
		if ($numfilas2<=0) {
			
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////777777777
			function randomColor(){
		 $str = "#";
		 for($i = 0 ; $i < 6 ; $i++){
		 $randNum = rand(0, 15);
		 switch ($randNum) {
		 case 10: $randNum = "A"; 
		 break;
		 case 11: $randNum = "B"; 
		 break;
		 case 12: $randNum = "C"; 
		 break;
		 case 13: $randNum = "D"; 
		 break;
		 case 14: $randNum = "E"; 
		 break;
		 case 15: $randNum = "F"; 
		 break; 
		 }
		 $str .= $randNum;
		 }
		 return $str;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$color=randomColor();

$sql = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','$aula','$numS');";
	$resent=mysqli_query($conectar,$sql);

	if ($aula=='A01') {
	$sql = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','A01-A02','$numS');";
	$resent=mysqli_query($conectar,$sql);

	}else if ($aula=='A02') {
	$sql = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','A01-A02','$numS');";
	$resent=mysqli_query($conectar,$sql);
}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ($resent==null) {
 			echo ' <script language="javascript">alert("Error");</script> ';
 			header("location: falloR1.php");
}else{
			echo ' <script language="javascript">alert("Reserva Capturada");</script> ';
			header("location: exitosoR1.php");

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}else if($numfilas2>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}else if($numfilas1>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
////////////////////////////////////////////////FIN IF PRINCIPAL////////////////////////////////////////////////////////////////////////////////////		
	}else if ($aula=='A03') {

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$consulta1="SELECT * FROM `reservas` WHERE (fechaI BETWEEN '$fechaI' AND '$fechaF') AND (horaI>='$horaI' AND horaI<='$horaF') AND (fk_numAula='$aula')";
	$resultado1 = $conectar->query($consulta1);  
	$numfilas1 = $resultado1->num_rows;
		
		if ($numfilas1<=0) {
			
	$consulta2="SELECT * FROM `reservas` WHERE (fechaF BETWEEN '$fechaI' AND '$fechaF') AND (horaF>='$horaI' AND horaF<='$horaF') AND (fk_numAula='$aula')";
	$resultado2 = $conectar->query($consulta2);
	$numfilas2 = $resultado2->num_rows;  
		if ($numfilas2<=0) {
			
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////777777777
			function randomColor(){
		 $str = "#";
		 for($i = 0 ; $i < 6 ; $i++){
		 $randNum = rand(0, 15);
		 switch ($randNum) {
		 case 10: $randNum = "A"; 
		 break;
		 case 11: $randNum = "B"; 
		 break;
		 case 12: $randNum = "C"; 
		 break;
		 case 13: $randNum = "D"; 
		 break;
		 case 14: $randNum = "E"; 
		 break;
		 case 15: $randNum = "F"; 
		 break; 
		 }
		 $str .= $randNum;
		 }
		 return $str;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$color=randomColor();

$sql = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','$aula','$numS');";
	$resent=mysqli_query($conectar,$sql);
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ($resent==null) {
 			echo ' <script language="javascript">alert("Error");</script> ';
 			header("location: falloR1.php");
}else{
			echo ' <script language="javascript">alert("Reserva Capturada");</script> ';
			header("location: exitosoR1.php");

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}else if($numfilas2>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}else if($numfilas1>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
				
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//FIN DE ELSE IF
				# code...
	}else if ($aula=='A01-A02') {

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$consulta1="SELECT * FROM `reservas` WHERE (fechaI BETWEEN '$fechaI' AND '$fechaF') AND (horaI>='$horaI' AND horaI<='$horaF') AND (fk_numAula='$aula'  OR fk_numAula='A01' OR fk_numAula='A02')";
	$resultado1 = $conectar->query($consulta1);  
	$numfilas1 = $resultado1->num_rows;
		
		if ($numfilas1<=0) {
			
	$consulta2="SELECT * FROM `reservas` WHERE (fechaF BETWEEN '$fechaI' AND '$fechaF') AND (horaF>='$horaI' AND horaF<='$horaF') AND (fk_numAula='$aula'  OR fk_numAula='A01' OR fk_numAula='A02')";
	$resultado2 = $conectar->query($consulta2);
	$numfilas2 = $resultado2->num_rows;  
		if ($numfilas2<=0) {
			
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////777777777
			function randomColor(){
		 $str = "#";
		 for($i = 0 ; $i < 6 ; $i++){
		 $randNum = rand(0, 15);
		 switch ($randNum) {
		 case 10: $randNum = "A"; 
		 break;
		 case 11: $randNum = "B"; 
		 break;
		 case 12: $randNum = "C"; 
		 break;
		 case 13: $randNum = "D"; 
		 break;
		 case 14: $randNum = "E"; 
		 break;
		 case 15: $randNum = "F"; 
		 break; 
		 }
		 $str .= $randNum;
		 }
		 return $str;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$color=randomColor();

$sql = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','$aula','$numS');";
	$resent=mysqli_query($conectar,$sql);

	if ($aula=='A01-A02') {
	$sql1 = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','A01','$numS');";
	$resent=mysqli_query($conectar,$sql1);
	$sql2 = "INSERT INTO reservas(departamento,nombreEve,descrip,material,tipo,fechaI,fechaF,horaI,horaF,color,registra,fk_numAula,fk_numUsu) VALUES ('$area','$nomE','$descrip','$matExt','$tipo','$fechaI','$fechaF','$horaI','$horaF','$color','$reg','A02','$numS');";
	$resent=mysqli_query($conectar,$sql2);
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ($resent==null) {
 			echo ' <script language="javascript">alert("Error");</script> ';
 			header("location: falloR1.php");
}else{
			echo ' <script language="javascript">alert("Reserva Capturada");</script> ';
			header("location: exitosoR1.php");

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}else if($numfilas2>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}else if($numfilas1>0){
			echo "<script>location.href='/resunam/vista/falloReserva1.php#'</script>";
		}
				
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//FIN DE ELSE IF
				# code...
	}

?>