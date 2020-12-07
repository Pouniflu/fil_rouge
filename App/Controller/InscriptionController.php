<?php
namespace App\Controller;

// Création d'une classe InscriptionController permettant de controler la page d'inscription
class InscriptionController {

    public function renderIndex(){
            require ROOT."/App/View/inscriptionView.php";
    }
}