<?php
namespace App\Controller;
use App\Model\PollModel;

// Création d'une classe PollsByThemController permettant de controler la page du pari.
class PollController {

    public function __construct()
    {
        $this->model = new PollModel();
    }

    public function renderIndex(){
        $question = $this->model->getQuestion();
        $answers = $this->model->getAnswers();
        $thematique = $this->model->getThematique();
        require ROOT."/App/View/PollView.php";
    }
}