<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;

class Controlle {
    public function view(String $view, Response $response){
        $pagina = include '../App/View/'.$view.'.php';

        $response->getBody()->getContents($pagina);

        return $response;
    }

    public function layout($caminho){
        $caminho = str_replace(".", "/", $caminho); 
        include dirname(__FILE__, 2)."/View/$caminho.php";
    }
}