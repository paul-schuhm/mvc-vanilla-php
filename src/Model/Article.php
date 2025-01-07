<?php

namespace Paul\MVC\Model;

/**
 * Modèle d'article
 */
class Article{

    public function __construct(
        readonly public string $title
    )
    {

    }
}