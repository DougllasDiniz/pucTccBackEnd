<?php
use Illuminate\Database\Capsule\Manager as Db;
require 'vendor/autoload.php';
class ModelConexao {
    
   public function ConexaoBD(){    
        //configurações de acesso ao banco
        $db = new Db;

        $db->addConnection([
            'driver'    => 'mysql',
            'host'      => 'dbtcc.cftx2pwwsr3n.sa-east-1.rds.amazonaws.com',
            'database'  => 'sgc',
            'username'  => 'root',
            'password'  => 'apn195100',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $db->setAsGlobal();
        $db->bootEloquent();
        return $db;
    }
}


