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
               
        <title>Inicio | UNAM</title>

        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="misjs/funciones.js"></script>         
        <script type="text/javascript" language="javascript" src="media/js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
        
        <link rel="stylesheet" href="media/css/validationEngine.jquery.css" type="text/css"/>
        </script>
        <script src="componentesjquery/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="componentesjquery/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
        </script>
        <script type="text/javascript">
             function imprSelec(nombre='calen') {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'popimpr');
            ventimp.document.write( ficha.innerHTML );
            ventimp.document.close();
            ventimp.print( );
            ventimp.close();
          }
        </script>


</head>
    <body background="media/images/fondoa3.jpg" style="background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;">

<div class="container3" id="calen" style="overflow-y: scroll;">        
    
<center><h1>CALENDARIO DE RESERVAS </h1></center>
    
    <form name="myform" id="myform" action="calendario1.php" method="post">

    <select name="mes" style="width: 205px; margin-left:160px" class="validate[required]  text-input">
    <option value="">Seleccionar Mes</option>
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Junio</option>
    <option value="07">Julio</option>
    <option value="08">Agosto</option>
    <option value="09">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
    </select>

    <?php  $anoActual = date('Y');
        $anoInicio='2017';

        $anos=$anoActual-$anoInicio;
        ?>
    <select name="an" style="width: 205px;margin-left:50px" class="validate[required] text-input">
    <option value="">Seleccionar Año</option>
    <?php  for ($i=0; $i<=$anos ; $i++) {
             $anoInicio++; ?>
    <option value="<?php echo $anoInicio?>"><?php echo $anoInicio?></option>
<?php } ?>
    </select>

    <select name="aula" style="width: 205px;margin-left:50px" class="validate[required] text-input">
    <option value="">Seleccionar Aula</option>
    <option value="A01">A01</option>
    <option value="A02">A02</option>
    <option value="A03">A03</option>
    <option value="A01-A02">A01-A02</option>
    </select>

    <input type="submit" value="Buscar" style="margin-left:50px;"><br>

 </form>
<?php 
if(!$_POST){
?> 
 <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%"  border="1">
                <thead>
                    <tr>
                        <th>DIA</th>
                        <th>7:00</th>
                        <th>7:30</th>
                        <th>8:00</th>
                        <th>8:30</th>
                        <th>9:00</th>
                        <th>9:30</th>
                        <th>10:00</th>
                        <th>10:30</th>
                        <th>11:00</th>
                        <th>11:30</th>
                        <th>12:00</th>
                        <th>12:30</th>
                        <th>1:00</th>
                        <th>1:30</th>
                        <th>2:00</th>
                        <th>2:30</th>
                        <th>3:00</th>
                        <th>3:30</th>
                        <th>4:00</th>
                        <th>4:30</th>
                        <th>5:00</th>
                        <th>5:30</th>
                        <th>6:00</th>
                        <th>6:30</th>
                        <th>7:00</th>
                        <th>7:30</th>
                        <th>8:00</th>
                        <th>8:30</th>
                        <th>9:00</th>
                        <th>9:30</th>
                        <th>10:00</th>
                    </tr>
                </thead>
                <tbody>
                     </tbody>
      <tfoot>
            <tr>
                <th><center><a href="index2.php"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
<?php
    }else{
////////////////////////////////////////////////////////////////////////////////////////////

    $Vaula=$_POST['aula'];
    $Vmes=$_POST['mes'];
    $Vano=$_POST['an'];

    // $Vfecha=$_POST['mifecha'];
    // $Vmes = substr($Vfecha, 5, 2); /// MES
    // $Vano = substr($Vfecha, 0, 4); /// AÑO

/////////////////////////////////////////////////////////////////////////////////////////////
    $months = array (1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
     
//////////////////////////////////////////////////////////////////////////////////////////////
    
      ?>
      <center><h2>Reservas <?php echo ' aula '.$Vaula.' '.$months[(int)$Vmes]?> <?php echo $Vano?></h2></center>
            <table cellpadding="0" cellspacing="0" border="1" class="display" id="example" width="100%" >
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th>DIA</th>
                        <th>7:00</th>
                        <th>7:30</th>
                        <th>8:00</th>
                        <th>8:30</th>
                        <th>9:00</th>
                        <th>9:30</th>
                        <th>10:00</th>
                        <th>10:30</th>
                        <th>11:00</th>
                        <th>11:30</th>
                        <th>12:00</th>
                        <th>12:30</th>
                        <th>1:00</th>
                        <th>1:30</th>
                        <th>2:00</th>
                        <th>2:30</th>
                        <th>3:00</th>
                        <th>3:30</th>
                        <th>4:00</th>
                        <th>4:30</th>
                        <th>5:00</th>
                        <th>5:30</th>
                        <th>6:00</th>
                        <th>6:30</th>
                        <th>7:00</th>
                        <th>7:30</th>
                        <th>8:00</th>
                        <th>8:30</th>
                        <th>9:00</th>
                        <th>9:30</th>
                        <th>10:00</th>
                    </tr>
                </thead>
                <tbody>
    <?php
        //////////////////////////////////CALCULAR DIA////////////////////////////////////////////
        $array_dias['Sunday'] = "Domingo";
        $array_dias['Monday'] = "Lunes";
        $array_dias['Tuesday'] = "Martes";
        $array_dias['Wednesday'] = "Miercoles";
        $array_dias['Thursday'] = "Jueves";
        $array_dias['Friday'] = "Viernes";
        $array_dias['Saturday'] = "Sabado";
        //////////////////////////////////////////////////////////////////////////////////////////

         // $aux2 = ($row['fechaF']);
        if ($months[(int)$Vmes]=='Abril' || $months[(int)$Vmes]=='Junio' || $months[(int)$Vmes] == 'Septiembre' || $months[(int)$Vmes] == 'Noviembre') {
          
          $total=30;
        
        }else if ($months[(int)$Vmes] == 'Enero' || $months[(int)$Vmes] == 'Marzo' || $months[(int)$Vmes] == 'Mayo' || $months[(int)$Vmes] == 'Julio' || $months[(int)$Vmes] == 'Agosto' || $months[(int)$Vmes] == 'Octubre' || $months[(int)$Vmes] == 'Diciembre') {

          $total=31;
          
        }else{

          $total=28;

        }
            
    for ($i = 1; $i <= $total; $i++) {
        $aux1=$Vano.'-'.$Vmes.'-'.$i;
    ?> 

       <tr class="success">
       <td style="background-color: #ffe6b0; color: #5a3d02;font-weight: bold;"><?php echo $i; ?></td> 
       <td style="background-color: #ffe6b0; color: #5a3d02;font-weight: bold;"><?php echo $array_dias[date('l', strtotime($aux1))];?></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       </tr>        
<?php } ?>
      </tbody>
      <tfoot>
            <tr>
                <th><center><a href="index2.php"><img src="media/images/regreso.png"  width="95" height="50" style="margin-top:17px;"></a></center></th>
                <th> </th>
            </tr>
      </table>
      </div>
      </form>
      </center>
<?php 
//////////////////////////////////////////////////REALIZA CONSULTA/////////////////////////////////////////////////
$cn = mysqli_connect("localhost","root","","reservaunam");
$query="SELECT * FROM reservas WHERE YEAR( fechaI ) = '$Vano' and MONTH(fechaI) = '$Vmes' and fk_numAula= '$Vaula'";
$resultado = $cn->query($query);
    
    while($row = $resultado->fetch_assoc()){
      $nombre = ($row['nombreEve']); 
      $inicioE=($row['fechaI']);
      $finE=($row['fechaF']);
      $inicioh=($row['horaI']);
      $finh=($row['horaF']);
      $micolor=($row['color']);

      $Vdia = substr($inicioE, 8, 2); /// DIA 0000/00/00
      $Vdia2 = substr($finE, 8, 2); /// DIA 0000/00/00
      $Vhora = substr($inicioh, 0, 2); // hora 00:00
      $horad= substr($inicioh, 3, 2);

      $Vhoraf = substr($finh, 0, 2); // hora 00:00
      $horadf= substr($finh, 3, 2);
      $resumen= substr($nombre, 0, 30);
        


 ?>
<!-- ///////////////////////////////////////IMPRIME EN CELDA///////////////////////////////////////-->
   <script type="text/javascript">
     var dia = <?php echo $Vdia;?>;
     var dia2 = <?php echo $Vdia2;?>;

     var hora = <?php echo $Vhora;?>;
     var min = <?php echo $horad;?>;
     var horas=0;

     var hora2 = <?php echo $Vhoraf;?>;
     var min2 = <?php echo $horadf;?>;
     var horas2=0;

     if (hora==7 && min==0) {
      horas=2;
     }else if(hora==7 && min==30){
      horas=3;
     }else if(hora==8 && min==0){
      horas=4;
     }else if(hora==8 && min==30){
      horas=5;
     }else if(hora==9 && min==0){
      horas=6;
     }else if(hora==9 && min==30){
      horas=7;
     }else if(hora==10 && min==0){
      horas=8;
     }else if(hora==10 && min==30){
      horas=9;
     }else if(hora==11 && min==0){
      horas=10;
     }else if(hora==11 && min==30){
      horas=11;
     }else if(hora==12 && min==0){
      horas=12;
     }else if(hora==12 && min==30){
      horas=13;
     }else if(hora==13 && min==0){
      horas=14;
     }else if(hora==13 && min==30){
      horas=15;
     }else if(hora==14 && min==0){
      horas=16;
     }else if(hora==14 && min==30){
      horas=17;
     }else if(hora==15 && min==0){
      horas=18;
     }else if(hora==15 && min==30){
      horas=19;
     }else if(hora==16 && min==0){
      horas=20;
     }else if(hora==16 && min==30){
      horas=21;
     }else if(hora==17 && min==0){
      horas=22;
     }else if(hora==17 && min==30){
      horas=23;
     }else if(hora==18 && min==0){
      horas=24;
     }else if(hora==18 && min==30){
      horas=25;
     }else if(hora==19 && min==0){
      horas=26;
     }else if(hora==19 && min==30){
      horas=27;
     }else if(hora==20 && min==0){
      horas=28;
     }else if(hora==20 && min==30){
      horas=29;
     }else if(hora==21 && min==0){
      horas=30;
     }else if(hora==21 && min==30){
      horas=31;
     }else if(hora==22 && min==0){
      horas=32;
     }else if(hora==22 && min==30){
      horas=33;
     }

     /////////////////////////////////////////////////////////////////////////////////////////////
      if (hora2==7 && min2==0) {
      horas2=2;
     }else if(hora2==7 && min2==30){
      horas2=3;
     }else if(hora2==8 && min2==0){
      horas2=4;
     }else if(hora2==8 && min2==30){
      horas2=5;
     }else if(hora2==9 && min2==0){
      horas2=6;
     }else if(hora2==9 && min2==30){
      horas2=7;
     }else if(hora2==10 && min2==0){
      horas2=8;
     }else if(hora2==10 && min2==30){
      horas2=9;
     }else if(hora2==11 && min2==0){
      horas2=10;
     }else if(hora2==11 && min2==30){
      horas2=11;
     }else if(hora2==12 && min2==0){
      horas2=12;
     }else if(hora2==12 && min2==30){
      horas2=13;
     }else if(hora2==13 && min2==0){
      horas2=14;
     }else if(hora2==13 && min2==30){
      horas2=15;
     }else if(hora2==14 && min2==0){
      horas2=16;
     }else if(hora2==14 && min2==30){
      horas2=17;
     }else if(hora2==15 && min2==0){
      horas2=18;
     }else if(hora2==15 && min2==30){
      horas2=19;
     }else if(hora2==16 && min2==0){
      horas2=20;
     }else if(hora2==16 && min2==30){
      horas2=21;
     }else if(hora2==17 && min2==0){
      horas2=22;
     }else if(hora2==17 && min2==30){
      horas2=23;
     }else if(hora2==18 && min2==0){
      horas2=24;
     }else if(hora2==18 && min2==30){
      horas2=25;
     }else if(hora2==19 && min2==0){
      horas2=26;
     }else if(hora2==19 && min2==30){
      horas2=27;
     }else if(hora2==20 && min2==0){
      horas2=28;
     }else if(hora2==20 && min2==30){
      horas2=29;
     }else if(hora2==21 && min2==0){
      horas2=30;
     }else if(hora2==21 && min2==30){
      horas2=31;
     }else if(hora2==22 && min2==0){
      horas2=32;
     }else if(hora2==22 && min2==30){
      horas2=33;
     }
     /////////////////////////////////////////////////////////////////////////////////////////////
     var longitud=(horas2-horas)+1;
     var reservas=(dia2-dia)+1;
     var cuenta=0;

      document.getElementById("example").rows[dia].cells[horas].innerHTML ='<a type="submit" href="constancia/reporteEvento.php? clave= <?php echo $row['numero_reserva'] ?> " title="<?php echo $nombre?>" <center><?php echo $resumen ?></center></a>'; 
      document.getElementById('example').rows[dia].cells[horas].style.backgroundColor='<?php echo $micolor ?>';
     

var cuenta2=0;
      for (var j = 0; j <reservas ; j++) {
      document.getElementById("example").rows[dia+j].cells[horas].innerHTML ='<a type="submit" href="constancia/reporteEvento.php? clave= <?php echo $row['numero_reserva'] ?> " title="<?php echo $nombre?>" <center><?php echo $resumen ?></center></a>'; 
      document.getElementById('example').rows[dia+j].cells[horas].style.backgroundColor='<?php echo $micolor ?>';

      
      for (var ii = 1; ii <longitud ; ii++) {
        cuenta2++;
      document.getElementById("example").rows[dia+j].cells[horas+ii].innerHTML ='<a type="submit" href="constancia/reporteEvento.php? clave= <?php echo $row['numero_reserva'] ?> " title="<?php echo $nombre?>" <center><?php echo $resumen ?></center></a>'; 
      document.getElementById('example').rows[dia+j].cells[horas+ii].style.backgroundColor='<?php echo $micolor ?>';
      
      if (longitud-cuenta2==1) {
         document.getElementById("example").rows[dia+j].cells[horas+ii].innerHTML ='<a type="submit" href="actualizaRes.php? clave= <?php echo $row['numero_reserva'] ?>" title="<?php echo $nombre?>" <center><?php echo $resumen.' M' ?></center></a>'; 
      document.getElementById('example').rows[dia+j].cells[horas+ii].style.backgroundColor='<?php echo $micolor ?>';

      }

      }

      }


      

        
//}
   </script> 
<!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
}
echo '<input type="submit" value="Imprimir" onclick="imprSelec()"><br>';
}
?>
   

<!-- <a href="javascript:imprSelec('calen')" >Imprimir texto</a> --></div>



<div id="capaMadre">

<div id="pie"><br>&copy; 2019 | FACULTAD DE MEDICINA</br>
<br>Circuito Interior, Ciudad Universitaria, Av. Universidad 3000, Cp. 04510</br> 
</div>
</div>

    </body>
</html>