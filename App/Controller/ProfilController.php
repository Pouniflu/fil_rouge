<?php
namespace App\Controller;
use App\Model\ProfilModel;

// Création d'une classe ProfilController permettant de controler la page de profil
class ProfilController {

    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function renderIndex(){
        $polls = $this->model->getPolls();
        $user = $this->model->getUser();
        require ROOT."/App/View/profilView.php";
    }
}