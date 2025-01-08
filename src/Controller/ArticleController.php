<?php

namespace Paul\MVC\Controller;

use Paul\MVC\Model\Article;
use Paul\MVC\View\SingleArticle;

/**
 * Contrôleur en charge des ressources liées aux articles
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

        //Partie métier: retourner un article avec le titre demandé

        $title = $this->args['title'];

        //Ici, il FAUT un titre
        $article = Article::create($title);

        //Préparer la présentation du résultat de l'opération métier
        //Remarque : ici on crée un couplage entre la vue et le modèle en passant directement l'objet métier Article
        //On peut facilement éliminer ce couplage via des interfaces et/ou des value objects (représentation simple des données ou DTO)
        $view = new SingleArticle($article);

        //La vue a la charge de préparer la réponse pour le client (mise en forme des résultats délivrés par le modèle/partie métier de l'application)
        return $view->getHtml();
    }
}
