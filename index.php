<?php

require 'vendor/autoload.php';
require 'ViewModel/ViewModelLogin.php';

class WebServiceLogin{

    public function callHttpPost(){
        // 	Cria e configura o Slim
        $config = ['settings' => [    
            'addContentLengthHeader' => false,
        ]];
        $app = new \Slim\App($config);

        //rota do post para buscar os dados no banco de dados
        $app->post('/login[/]', function ($request, $response) use ($app) {
        
            $dado = $request->getParsedBody();    
            $con = new ViewModelLogin();
            $user = $con->dadosUsuario($dado[email],$dado[senha]);
            
            return $user;
            
        });

        // Run app
        $app->run();
    }
}

$dadosPost = new WebServiceLogin();
$dadosPost->callHttpPost();

?>
