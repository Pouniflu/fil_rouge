<?php
namespace App\Model;
use Core\Database;

// La classe PollModel permet de faire le lien entre le bdd et le controller
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
            "SELECT reponse, reponse_id 
            FROM t_reponses
            WHERE sondage_id = ?"
        );
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getThematique(){
        $query = $this->pdo->prepare(
            "SELECT t_sondages.thematique_id, t_thematiques.nom
            FROM t_sondages
            INNER JOIN t_thematiques ON t_thematiques.thematique_id = t_sondages.thematique_id
            WHERE sondage_id = ?"
        );
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getVotes(){
        $query = $this->pdo->prepare(
            "SELECT votes
            FROM t_reponses
            WHERE reponse_id = ?
            ");
        $query->execute(array($_POST['ans']));
        $newQuery = $query->fetch();
        return $newQuery['votes'];
    }

    public function getAllVotes(){
        $query = $this->pdo->prepare(
            "SELECT *
            FROM t_reponses
            WHERE sondage_id = ?
            ");
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function newVotes($data){
        $query = $this->pdo->prepare(
            "UPDATE t_reponses
            SET votes = '" . $data . "'
            WHERE reponse_id = ?
            ");
        $query->execute(array($_POST['ans']));
    }
}