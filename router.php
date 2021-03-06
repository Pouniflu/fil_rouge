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
use App\Controller\CreatePollExplicationController;
use App\Controller\InscriptionController;
use App\Controller\ProfilController;
use App\Controller\ThematiquesController;
use App\Controller\PollsByThemController;
use App\Controller\PollController;
use App\Controller\ResultController;

// 2. Création du nouveau "case"
if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {
        case 'home':
            $controller = new HomeController();
            $controller->renderIndex();
            break;
        case 'connexion':
            $error = null;
            $controller = new ConnexionController();
            if(isset($_POST["pseudoConnect"])){
                $error = $controller->LogUser();
            }
            $controller->renderIndex($error);
            break;
        case 'inscription':
            $message = null;
            $controller = new InscriptionController();
            if(isset($_POST["pseudo"])){
                $message = $controller->createUser();
            }
            $controller->renderIndex($message);
            break;
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->renderIndex();
            break;
        case 'createPollExplication' :
            $controller = new CreatePollExplicationController();
            $controller->renderIndex();
            break;
        case 'profil':
            $controller = new ProfilController();
            $controller->renderIndex();
            break;
        case 'thematiques' :
            $controller = new ThematiquesController();
            $controller->renderIndex();
            break;
        case 'polls' :
            $controller = new PollsByThemController();
            $controller->renderIndex();
            break;
        case 'poll' :
            if(array_key_exists("function", $_GET)){
                switch ($_GET["function"]){
                    case 'vote' :
                        $controller = new PollController();
                        $controller->ajaxVotes();
                        break;
                }
            } else {
                $controller = new PollController();
                $controller->renderIndex();
                if(isset($_POST['ans'])){
                    $controller->vote();
                }
            }
            break;
        case 'deconnexion' :
            session_start();
            session_destroy();
            header('location: ?page=home');
            break;
        default:
            # code...
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderIndex();
}