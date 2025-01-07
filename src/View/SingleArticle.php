<?php

namespace Paul\MVC\View;

//Warning: Ma vue dépend du modèle
use Paul\MVC\Model\Article;

/**
 * Template pour présenter le contenu d'un article
 */
class SingleArticle
{

    public function __construct(public Article $article) {}

    public function getHtml(): string
    {
        return sprintf("<html><h1>%s</h1></html>", $this->article->title);
    }
}
