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

/**Si un controleur est associé à cette endpoint
 *  - Passer le traitement de la requête au controller adéquat;
 *  - Retourner une page 404 sinon
 */
try {

    //getController lève une exception si aucun controlleur n'est trouvé
    $controller = $router->getController();

    //Arrête l'execution du programme;
    die;

    //Fabriquer la réponse (execution du code métier de l'application web)
    //Réponse au besoin du client
    $reponse = $controller->execute();

    //Retourner la réponse au client
    http_response_code(200);
    echo $response;
} catch (Exception $e) {
    //Aucune ressource exposée à cette URL, retourner une réponse 404
    http_response_code(404);
    //Message
    // echo $e->getMessage();
    echo "404 : La ressource demandée n'existe pas";
}
