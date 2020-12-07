<?php
namespace App\Controller;


// Création d'une classe ConnexionController permettant de controler la page de connexion
class ConnexionController {

    public function renderIndex(){
            require ROOT."/App/View/connexionView.php";
    }
}