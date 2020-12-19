<?php
namespace App\Controller;

// Création d'une classe CreatePollExplicationController permettant de controler la page d'explication de création de pari
class CreatePollExplicationController {

    public function renderIndex(){
            require ROOT."/App/View/createPollExplicationView.php";
    }
}