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
    


</div>
</center>
...
<script language='JavaScript' type='text/javascript'>
                perfiladmin();
</script>



<div id="capaMadre">

<div id="pie"><br>&copy; 2019 | FACULTAD DE MEDICINA</br>
<br>Circuito interior, Ciudad universitaria, Av. Universidad 3000, Cp. 04510</br> 
</div>
</div>

    </body>
</html>