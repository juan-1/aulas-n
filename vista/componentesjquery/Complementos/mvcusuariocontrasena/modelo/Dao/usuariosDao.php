<?php
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Beans/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Beans/mensaje.php';
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Dao/usuariosSql.php';
class usuarioDao
{
    function  identificarUsuario($usuario)
    {
        $mensaje=new mensaje();
        $con=  mysqli_connect("localhost","root", "", "curso");
        $datosArray=array($usuario->nombre,$usuario->password);
        
        $st=  procesaParametros::PrepareStatement(usuariosSql::indentificarUsuario(),$datosArray); 
        
        $query=$con->query($st);
        if($query->num_rows==0)
        {
            $mensaje->mensaje="El usuario no es correcto ";
            $mensaje->tipo="error";
            return $mensaje;
        }
       
        $mensaje->mensaje="Usuario identicado";
        $mensaje->tipo="correcto";
        $usuario=new $usuario();
        $mensaje->otrosDatos=$usuario;
        return $mensaje;
    }
}

