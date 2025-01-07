<?php

/**
 * Point d'entrée de l'application
 * Frontal Controller + Kernel
 */

require 'vendor/autoload.php';

use \Paul\MVC\Router;

//Définir un gestionnaire global d'exception
set_exception_handler(function (Throwable $e) {
    //Fails gracefull
    http_response_code(500);
});




$router = new Router();

$controller = $router->getController();

/**Si un controleur est associé à cette endpoint
 *  - Passer le traitement de la requête au controller adéquat;
 *  - Retourner une page 404 sinon
 */

//Fabriquer la réponse
$reponse = $controller->execute();

//Retourner la réponse au client
http_response_code(200);

echo $response;
