<?php
namespace App\Controller;
use App\Model\InscriptionModel;

// Création d'une classe InscriptionController permettant de controler la page d'inscription
class InscriptionController {

    public function __construct()
    {
        $this->model = new InscriptionModel();
    }
    
    public function renderIndex($message){
            require ROOT."/App/View/inscriptionView.php";
    }

    public function createUser() {

        $message = $this->model->signInUser();
        return $message;

    }
}