<?php

namespace Paul\MVC;

use Exception;
use Paul\MVC\Controller\ArticleController;

/**
 * Le routeur de l'application, associe un controller à chaque endpoint
 * et d'invoquer le controller
 */
class Router
{

    //Déclaration l'association entre endpoints et les controleurs
    //On range les ressources par méthode http
    public const ROUTES = [
        'GET' => [
            '/articles' => 'Paul\\MVC\\Controller\\ArticleController'
        ],
        'POST' => []
    ];

    /**
     * Retourne la classe du contrôleur associée à la requête
     * @throws Exception Si aucun contrôleur n'est trouvé
     */
    public function getController()
    {
        //Récupérer l'URL demandée et la méthode HTTP
        //Découper l'URI en plusieurs parties (path, query)
        $parts = parse_url($_SERVER['REQUEST_URI']);
        //Découper la query part
        parse_str($parts['query'], $args);

        //Vérifier que l'endpoint existe dans les ROUTES déclarées par l'application
        $resource = $parts['path'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        $isRoute = isset(self::ROUTES[$httpMethod][$resource]);

        if (!$isRoute) {
            throw new Exception("La ressource demandée n'existe pas");
        }

        $controllerName = self::ROUTES[$httpMethod][$resource];

        //Instancier le controleur

        if (!class_exists($controllerName))
            throw new Exception("Le controleur n'existe pas");

        //Instancie le controleur et lui passer en arguments de son constructeur
        //les données dont il a besoin pour faire son travail (données sur la requête)
        $controller = new $controllerName($args);

        return $controller;
    }

    public function __construct() {}
}
