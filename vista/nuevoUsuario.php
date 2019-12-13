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
  <h1>AGREGAR USUARIO</h1>
  <form name="myform" id="myform" method="post" action="file.php" enctype="multipart/form-data">

    <label>Número de cuenta o CURP:</label><input type="text" name="numero" maxlength="18" class="validate[required,custom[onlyLetterNumber]] text-input" placeholder="Numero o CURP del solicitante" autofocus="autofocus">
    
    <label>Nombre:</label><input type="text" name="nombre" class="validate[required] text-input" placeholder="Nombre(s)">

    <label>Apellido Paterno:</label><input type="text" name="ap" class="validate[required] text-input" placeholder="Apellido Paterno">

    <label>Apellido Materno:</label><input type="text" name="am" placeholder="Apellido Materno">


    <label>Contraseña:</label><input type="password" name="pass" id="pass" class="validate[required] text-input" placeholder="Contraseña" style="width: 265px;margin-left: -24px">
  

    <label>Email:</label><input type="email" name="email" class="validate[required,custom[email]] text-input" placeholder="Email">
    
    <label>Tipo de usuario:</label><select name="dep" style="width: 305px" class="validate[required] text-input">
    <option value="">Seleccionar</option>
    <option value="Administrador General">Administrador General</option>
    <option value="Administrador Restringido">Administrador Restringido</option>
    <option value="Observador Academico">Observador Academico</option>
    <option value="Usuario">Usuario</option>
    </select><P>

    <label>Foto:</label><input type="file" name="archivo" id="archivo" class="validate[required] text-input"></input><p>

    <input type="submit" value="Guardar" style="margin-left:1px;"><br>
    <a href="index2.php" ><img src="media/images/regreso.png" width="95" height="50" style="margin-top:17px; margin-left:34px;"></a>
 </form>
 </div>

</div>
</center>
  <div style="float: right;margin-top: -450px; margin-right:517px">  
    <button class="btn btn-primary" id="btn" type="button" onclick="mostrarContrasena()" style="background-color:#9bed38; border-color: #9bed38; border-radius: 10px;"><img src="media/images/ojo.png" style="width: 20px; margin-top: 3.3px;margin-bottom: 3.3px; margin-right:3px; margin-left: 12px"></button>
    </div>

<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("pass");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>


<div id="capaMadre">

<div id="pie"><br>&copy; 2019 | FACULTAD DE MEDICINA</br>
<br>Circuito Interior, Ciudad Universitaria, Av. Universidad 3000, Cp. 04510</br> 
</div>
</div>

    </body>
</html>