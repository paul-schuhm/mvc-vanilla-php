<?php

namespace Paul\MVC\Model;

use Exception;

/**
 * Modèle d'article
 */
class Article{

    //Le constructeur est privé, je ne peux plus faire de 'new' en dehors de la classe.
    private function __construct(
        public readonly string $title
    )
    {
    }

    //Pattern 'factory method'. On doit passer par cette méthode pour instancier
    //un objet Article. Ca permet de faire de la validation avant d'instancier l'objet
    //Ainsi, on peut vérifier qu'on instancie que des objets Article valides (ici avec un titre).
    public static function create($title){

        //Validation avant d'instancier l'objet

        //Si aucun titre fourni
        if(empty($title))
            throw new Exception("Merci de fournir un titre");

        return new Article($title);
    }


}