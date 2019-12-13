<?php
class usuariosSql
{
    public static function  indentificarUsuario()
    {
        $query="select * from tusuarios where usuario=? and password=?";
        return $query;
    }
}
?>

