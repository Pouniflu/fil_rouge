<?php
// UTILISATION DU ROUTER :
// 1. Ajouter la classe utilisée en premier avec "use"
// 2. Créer un nouveau "case"
// exemple : si on va sur l'url projet-sondageexo.test/Public/?page=result on se retrouve sur la View Result parce qu'on a
// appelé la méthode renderIndex() (cf App\Controller\ResultPollController pour voir cette méthode).

// 1. Ajout de la classe
use App\Controller\HomeController;
use App\Controller\ConnexionController;
use App\Controller\CreatePollController;
use App\Controller\InscriptionController;


// 2. Création du nouveau "case"
if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {
        case 'home':
            $controller = new HomeController();
            $controller->renderIndex();
            break;
        case 'connexion':
            $controller = new ConnexionController();
            $controller->renderIndex();
            break;
        case 'inscription':
            $controller = new InscriptionController();
            $controller->renderIndex();
            break;
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->renderIndex();
            break;
        default:
            # code...
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderIndex();
}