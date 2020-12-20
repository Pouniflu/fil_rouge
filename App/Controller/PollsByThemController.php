<?php
namespace App\Controller;
use App\Model\PollsByThemModel;

// Création d'une classe PollsByThemController permettant de controler la page d'une thématique de pari choisie.
class PollsByThemController {

    public function __construct()
    {
        $this->model = new PollsByThemModel();
    }

    public function renderIndex(){
        $pollsByThem = $this->model->getPollsByThem();
        $thematique = $this->model->getThematique();
        require ROOT."/App/View/PollsByThemView.php";
    }
}