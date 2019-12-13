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
               
        <title>Reservas | UNAM</title>
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
  <h1>NUEVA RESERVA</h1>
  <form method="post" action="guardareserva2.php" id="formreserva">

    <label>Departamento o Área solicitante:</label><input type="text" name="depar" class="validate[required] text-input" placeholder="Nombre del departamento o área solicitante">
    
    <label>Número de cuenta o CURP:</label>
    <select name="numsoli" style="width: 305px" class="validate[required]" >
    <option value="">Seleccionar</option>
    <?php
      $cn = mysqli_connect("localhost","root","","reservaunam");
         $query1 =" SELECT * FROM usuarios;";
         $resultado = $cn->query($query1);
         while($row = $resultado->fetch_assoc()){
?>
    <option value="<?php echo $row['numero_usuario']; ?>"><?php echo $row['numero_usuario']?></option>
     <?php } ?>        
    </select><P>

    <label>Nombre del Evento:</label><input type="text" name="evento" class="validate[required] text-input" placeholder="Nombre del Evento">

    <label>Descripción:</label><input type="text" name="des" class="validate[required] text-input" placeholder="Descripción del evento"><br>

    <label>Material Adicional:</label><input type="text" name="mate" class="validate[required] text-input" placeholder="¿Qué material necesitas?">

    <label>Aula:</label><select name="aula" style="width: 305px" class="validate[required] ">
    <option value="">Seleccionar</option>
    <option value="A01">A01 (30 personas)</option>
    <option value="A02">A02 (30 personas)</option>
    <option value="A03">A03 (30 personas)</option>
    <option value="A01-A02">A01 Y A02 (60 personas)</option>
    </select><P>

    <label>Tipo:</label><select name="tipo" style="width: 305px" class="validate[required]" >
    <option value="">Seleccionar</option>
    <option value="Curso">Curso</option>
    <option value="Taller">Taller</option>
    <option value="Diplomados">Diplomados</option>
    <option value="Libre">Libre/Reuniones</option>
    </select><P>
    
    <?php $hoy = date('Y-m-d'); ?>
    <label>Fecha Evento:</label><input name="fechainicio" type="date" id="fecha1"  style="margin-top: 10px; width: 120px;" class="validate[required]  text-input" min="<?php echo $hoy?>">

    <input name="fechafin" type="date" id="fecha2" style="margin-top: 10px; width: 120px;" class="validate[required]  text-input"><BR>
    
    <label>Hora Evento:</label><input type="time" name="hini" style="margin-top: 10px; width: 120px;" class="validate[required]  text-input">
    <input type="time" name="hfin" style="margin-top: 10px; width: 120px;" class="validate[required]  text-input"><BR>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="admin2.php" ><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </div>


</div>
</center>

<script type="text/javascript">

    document.getElementById("fecha1").onchange = function () {
    var input = document.getElementById("fecha2");
    input.setAttribute("min", this.value);
}
    
</script>

    </body>
</html>