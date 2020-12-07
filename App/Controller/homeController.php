<?php
namespace App\Controller;


// Création d'une classe HomeController permettant de controler la page d'accueil (Home)
class HomeController {

    public function renderIndex(){
            require ROOT."/App/View/homeView.php";
    }
}