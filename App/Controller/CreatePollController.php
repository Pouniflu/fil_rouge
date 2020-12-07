<?php
namespace App\Controller;

// Création d'une classe CreatePollController permettant de controler la page de création de pari
class CreatePollController {

    public function renderIndex(){
            require ROOT."/App/View/createPollView.php";
    }
}