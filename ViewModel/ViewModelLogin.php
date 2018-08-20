<?php

require 'vendor/autoload.php';
require 'Model/ModelLogin.php';

class ViewModelLogin{
    private $con;

    function __construct(){
        $this->con = new ModelLogin();
    }

    //valida o email e senha do usuario e traz as informações sobre ele
    public function dadosUsuario($email,$senha){        
        $dadosUsuario = $this->con->buscarUsuario($email,$senha);
        
        if (count($dadosUsuario)==0) {
            return false;
        }else{
            return json_encode($dadosUsuario,JSON_UNESCAPED_UNICODE);
        }
        
    }

}
