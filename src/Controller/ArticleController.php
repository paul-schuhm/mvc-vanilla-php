<?php

namespace Paul\MVC\Controller;

/**
 * Controleur en charge des ressources liées aux articles
 * Chef d'orchestre : mobilise le code métier, 
 * mobilise la vue pour présenter les résultats au client
 */
class ArticleController
{

    public function __construct(
        readonly array $args
    ) {}

    public function execute()
    {
        //Trouver un article avec le titre passé dans la requête
        //Ecrire réponse pour le client (afficher le contenu de l'article)
        dump('Je traite la demande');
        dump($this->args);
    }
}
