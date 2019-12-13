<!DOCTYPE html>
<html lang="en" >
    <head>
               
        <title>Principal | UNAM</title>
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

</head>
    <body background="media/images/fondo.jpg" style="background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;">
        
        <header>
        <center>
           <!--  <h1>BIENVENIDO</h1> -->
            <img src="media\images\escudomed.png" alt="Logo Walmart" style="width:135px;height:125px; margin-top: 10px; opacity: 1.5;"/>
        </center>
        </header>

<div class="linea"></div>

       <div class="container">
           

        </div>

<center>

<!-- inicio -->
<div class="containerini">
        
          <center>
            <div class="containerini">
  
 <!--  <h1>INICIO DE SESION</h1> -->
    
    <form method="get" action="../compara.php" id="myform">


    <label>Email :</label><input type="email" name="usua" maxlength="50" class="validate[required,custom[email]] text-input" placeholder="Ingresa Email de usuario">
    
    <label>Contraseña:</label><input type="password" name="contra" class="validate[required] text-input" placeholder="Ingresa Contraseña"> <P>

   <input  type="submit" value="Entrar" class="botonimagen">

   </form>

            
            </div>
<!-- fin -->


</div>
</center>


    </body>
</html>