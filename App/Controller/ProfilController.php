<?php
namespace App\Controller;

// Création d'une classe ProfilController permettant de controler la page de profil
class ProfilController {

    public function renderIndex(){
            require ROOT."/App/View/profilView.php";
    }
}