<?php
    require 'vendor/autoload.php';
    require 'Model/ModelConexao.php';

    class ModelLogin {
        private $con;

        function __construct(){
            $this->con = new ModelConexao();
        }

        //busca o usuario pelo email e senha
        public function buscarUsuario($email,$senha){
            $db = $this->con->ConexaoBD();                      
            $user = $db::table('aluno')->select('nome')->where([['email',"=",$email],
                                                ['senha','=',sha1(md5($senha))]])->get();

            return $user;
        }

    }

  
    
