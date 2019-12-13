<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:vista/index.php");
}


$numero=$_GET['clave'];
      $cn = mysqli_connect("localhost","root","","reservaunam");
         $query1 =" SELECT * FROM reservas WHERE numero_reserva='$numero';";
         $resultado = $cn->query($query1);
         while($row = $resultado->fetch_assoc()){
         $aux1 = ($row['departamento']); +
         $aux2 = ($row['nombreEve']); 
         $aux3 = ($row['descrip']); 
         $aux4 = ($row['material']); 
         $aux5 = ($row['tipo']); 
         $aux6 = ($row['fechaI']); 
         $aux7 = ($row['fechaF']); 
         $aux8 = ($row['horaI']); 
         $aux9 = ($row['horaF']);
         $aux10 = ($row['fk_numAula']); 
         $aux11 = ($row['fk_numUsu']);  
         $nume=($row['numero_reserva']);
         }     
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Inicio | UNAM</title>
        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="media/css/demo_table.css" />
        <script type="text/javascript" src="misjs/funciones.js"></script>         
        <script type="text/javascript" language="javascript" src="media/js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
        

        <link rel="stylesheet" href="media/css/validationEngine.jquery.css" type="text/css"/>
    </script>
    <script src="componentesjquery/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="componentesjquery/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>

    <script>
        jQuery(document).ready(function(){
            
            jQuery("#formreserva").validationEngine();
        });
    </script>

        <!-- escript graficar -->
 
 



        <!-- fin de scripot -->   
</head>
    <body background="media/images/fondoa3.jpg" style="background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;">
        
        <header>
            <img src="media\images\cabecera.png" alt="Logo UNAM" style="width:1348px;height:146px;"/>
        </header>

<div class="linea"></div>

       <div class="container">
           

        </div>

<center>

<!-- inicio -->
<div class="container3">        
     <div class="container4">
  <center>
  <h1>MODIFICAR RESERVAR</h1>
  <form method="post" action="guardareservanueva.php" id="formreserva">
    <label>Número de reserva:</label><input type="text" name="numero" id="numero" value="<?php echo $nume?>" readonly>

    <label>Departamento o Área solicitante:</label><input type="text" name="depar" class="validate[required] text-input" placeholder="Nombre del departamento o área solicitante" value="<?php echo $aux1?>">

    <label>Número del solicitante:</label><input type="text" name="numsoli" class="validate[required,custom[onlyLetterNumber]] text-input" placeholder="Número del solicitante" value="<?php echo $aux11?>">

    <label>Nombre del Evento:</label><input type="text" name="evento" class="validate[required] text-input" placeholder="Nombre del Evento" value="<?php echo $aux2?>">

    <label>Descripción:</label><input type="text" name="des" class="validate[required] text-input" placeholder="Descripción del evento" value="<?php echo $aux3?>"><br>

    <label>Material Adicional:</label><input type="text" name="mate" class="validate[required] text-input" placeholder="¿Qué material necesitas?" value="<?php echo $aux4?>">

    <label>Aula:</label><select name="aula" style="width: 305px" >
    <option value="<?php echo $aux10?>"><?php echo $aux10?></option>
    <option value="A01">A01 (30 personas)</option>
    <option value="A02">A02 (30 personas)</option>
    <option value="A03">A03 (30 personas)</option>
    <option value="A01-A02">A01 Y A02 (60 personas)</option>
    </select><P>

    <label>Tipo:</label><select name="tipo" style="width: 305px" >
    <option value="<?php echo $aux5?>"><?php echo $aux5?></option>
    <option value="Curso">Curso</option>
    <option value="Taller">Taller</option>
    <option value="Diplomados">Diplomados</option>
    <option value="Libre">Libre/Reuniones</option>
    </select><P>
    
    <?php $hoy = date('Y-m-d'); ?>
    <label>Fecha Evento:</label><input name="fechainicio" type="date" id="fecha1"  style="margin-top: 10px; width: 120px;" class="validate[required]  text-input" min="<?php echo $hoy?>" value="<?php echo $aux6?>">

    <input name="fechafin" type="date" id="fecha2" style="margin-top: 10px; width: 120px;" class="validate[required]  text-input" value="<?php echo $aux7?>"><BR>
   
    <label>Hora Evento:</label><input type="time" name="hini" style="margin-top: 10px; width: 120px;" value="<?php echo $aux8?>" class="validate[required]  text-input">
    <input type="time" name="hfin" style="margin-top: 10px; width: 120px;" value="<?php echo $aux9?>" class="validate[required]  text-input"><BR>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    
 </form>

 <form method="post" action="borrarEvento.php">
  <input type="hidden" name="num" value="<?php echo $nume?>" readonly>
  <input type="submit" value="Eliminar" style="margin-left:1px;"><br>
  <a href="calendario1.php" ><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </form>
 </div>
 
<script type="text/javascript">

    document.getElementById("fecha1").onchange = function () {
    var input = document.getElementById("fecha2");
    input.setAttribute("min", this.value);
}
    
</script>

</div>
</center>



    </body>
</html>