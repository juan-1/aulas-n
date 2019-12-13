<?php
require_once "../rutaconfig.php";
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/beans/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Bo/usuarioBo.php';

switch ($_POST['action']) {
    case "login":
        $usuario=new usuario();
        $usuario->nombre=$_POST['usu'];
        $usuario->password=$_POST['pwd'];
        $bo=new usuarioBo();
        print_r(json_encode($bo->identificarUsuarioBo($usuario)));
        break;

    default:
        break;
}

?>