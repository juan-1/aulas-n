<?php
require_once $_SERVER['DOCUMENT_ROOT'].rutaconfig::directorio. '/modelo/Dao/usuariosDao.php';
class usuarioBo
{
    var $dao;
    function __construct() {
        $this->dao=new usuarioDao();
    }
    
    function identificarUsuarioBo($usuario)
    {
      $resultado= $this->dao->identificarUsuario($usuario);
      return $resultado;
      //$resultado->otrosDatos
        
    }
}
?>

