<?php

class MUsuario
{
    public static function usuarioDelSistema($username, $password)
    {
        if ($username == "admin" && $password == "admin") {
            $usuario['username']=$username;
            $usuario['rol']='admin';
            return $usuario;
        }elseif($username == "user" && $password == "user"){
            $usuario['username']=$username;
            $usuario['rol']='user';
            return $usuario;
        }else{
            return null;
        }
    }
}
