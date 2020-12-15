<?php
namespace App\Controller;
use App\Model\ConnexionModel;

// Création d'une classe ConnexionController permettant de controler la page de connexion
class ConnexionController {

    public function __construct()
    {
        $this->model = new ConnexionModel();
    }

    public function renderIndex($error){
        require ROOT."/App/View/connexionView.php";
    }

    public function LogUser() {

        $error = $this->model->connexionUser();
        return $error;

    }
}