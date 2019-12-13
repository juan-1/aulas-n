<?php
session_start();
$misession=$_SESSION['usuario'];

if ($misession == null || $misession = '') {
    header("location:index.php");
}
$numero=$_GET['clave'];
      $cn = mysqli_connect("localhost","root","","reservaunam");
         $query1 =" SELECT * FROM usuarios WHERE numero_usuario='$numero';";
         $resultado = $cn->query($query1);
         while($row = $resultado->fetch_assoc()){
         $aux1 = ($row['numero_usuario']); +
         $aux2 = ($row['paterno']); 
         $aux3 = ($row['materno']); 
         $aux4 = ($row['nombre']); 
         $aux6 = ($row['email']); 
         $aux7 = ($row['tipoUsu']); 
         $fot = ($row['ruta']); 
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
            
            jQuery("#myform").validationEngine();
        });
    </script>

        <!-- escript graficar -->



        <!-- fin de scripot -->   
</head>
    <body background="media/images/fondoa3.jpg" style="background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;">
        
        <header>

           <!--  <h1>BIENVENIDO</h1> -->
            <img src="media\images\cabecera.png" alt="Logo UNAM" style="width:1348px;height:146px;"/>
<!--             <img src="media\images\escudomed.png" alt="Logo UNAM" style="width:145px;height:120px; margin-left: 930px; margin-top: 15px;"/> -->
        </header>

<div class="linea"></div>

       <div class="container" id="divinicial2">
           

        </div>

<center>

<!-- inicio -->
<div class="container3">        
    <div class="container4" id="formulario">
  <center>
  <h1>MODIFICAR USUARIO</h1>
  <form name="myform" id="myform" method="post" action="guardaCambiosUsu.php" enctype="multipart/form-data">

    <label>Número de cuenta o CURP:</label><input type="text" name="numero" maxlength="18" class="validate[required,custom[onlyLetterNumber]] text-input" placeholder="Numero o CURP del solicitante"  value="<?php echo $aux1?>">
    
    <label>Nombre:</label><input type="text" name="nombre" class="validate[required] text-input" placeholder="Nombre(s)"  value="<?php echo $aux4?>">

    <label>Apellido Paterno:</label><input type="text" name="ap" class="validate[required] text-input" placeholder="Apellido Paterno"  value="<?php echo $aux2?>">

    <label>Apellido Materno:</label><input type="text" name="am"  placeholder="Apellido Materno"  value="<?php echo $aux3?>">

    <label>Email:</label><input type="email" name="email" class="validate[required,custom[email]] text-input" placeholder="Email"  value="<?php echo $aux6?>">
    
    <label>Tipo de usuario:</label><select name="dep" style="width: 305px" class="validate[required] text-input">
    <option value="<?php echo $aux7?>"><?php echo $aux7?></option>
    <option value="Administrador General">Administrador General</option>
    <option value="Administrador Restringido">Administrador Restringido</option>
    <option value="Observador Academico">Observador Academico</option>
    <option value="Usuario">Usuario</option>
    </select><P>

    <label>Foto:</label><input type="file" name="archivo" id="archivo"></input><p>

     <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="index2.php" ><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>

 </form>
 </div>

</div>
</center>



<div id="capaMadre">

<div id="pie"><br>&copy; 2019 | FACULTAD DE MEDICINA</br>
<br>Circuito Interior, Ciudad Universitaria, Av. Universidad 3000, Cp. 04510</br> 
</div>
</div>

    </body>
</html>