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

    public function vote(){
        $vote = $this->model->getVotes();
        $vote++;
        $newVote = $this->model->newVotes($vote);
    }

    public function ajaxVotes(){
        $allVotes = $this->model->getAllVotes();
        echo json_encode($allVotes);
    }
}