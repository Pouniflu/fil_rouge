<?php
namespace App\Controller;
use App\Model\ThematiquesModel;

// Création d'une classe ThematiquesController permettant de controler la page des thématiques de pari.
class ThematiquesController {

    public function __construct()
    {
        $this->model = new ThematiquesModel();
    }

    public function renderIndex(){
        $thematiques = $this->model->getThematique();
        require ROOT."/App/View/thematiquesView.php";
    }
}