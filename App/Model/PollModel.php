<?php
namespace App\Model;
use Core\Database;

// La classe PollsByThemModel permet de faire le lien entre le bdd et le controller
class PollModel extends Database {

    public function getQuestion() {
        $query = $this->pdo->prepare(
            "SELECT titre, question
            FROM t_sondages
            WHERE sondage_id = ?"
        );
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAnswers(){
        $query = $this->pdo->prepare(
            "SELECT reponse 
            FROM t_reponses
            WHERE sondage_id = ?"
        );
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}