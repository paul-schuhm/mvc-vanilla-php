<?php

/**
 * Point d'entrée de l'application
 * Frontal Controller + Kernel
 */

require 'vendor/autoload.php';


//Connaitre la demande, ressource demandée : URL + Méthode HTTP (endpoint)

//Invoquer le router

/**Si un controleur est associé à cette endpoint
 *  - Passer le traitement de la requête au controller adéquat;
 *  - Retourner une page 404 sinon
 */

//Retourner la réponse au client
