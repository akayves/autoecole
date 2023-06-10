<?php 

use Router\Router;
use App\Exceptions\NotFoundException;

require __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/constants.php';

$router = new Router($_GET['url']);

/**
 * * il vérifie si nos route fonctionne normalement sinon envoie une erreur 404
 */
try{
    $router->run(); 
}catch(NotFoundException $e) {
    return $e->error404();
}


    