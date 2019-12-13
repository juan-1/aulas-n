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
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#example').dataTable({
                    "oLanguage": {
                        "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
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
    


</div>
</center>
...
<script language='JavaScript' type='text/javascript'>
                perfilobs();
</script>

<div id="capaMadre">

<div id="pie"><br>&copy; 2019 | FACULTAD DE MEDICINA</br>
<br>Circuito Interior, Ciudad Universitaria, Av. Universidad 3000, Cp. 04510</br> 
</div>
</div>
    </body>
</html>