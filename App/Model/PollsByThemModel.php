<?php
namespace App\Model;
use Core\Database;

// La classe PollsByThemModel permet de faire le lien entre le bdd et le controller
class PollsByThemModel extends Database {

    public function getPollsByThem() {
        $query = $this->pdo->prepare(
            "SELECT sondage_id, titre
            FROM t_sondages
            INNER JOIN t_thematiques ON t_thematiques.thematique_id = t_sondages.thematique_id
            WHERE t_sondages.thematique_id = ?"
        );
        $query->execute(array($_GET['thematique_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getThematique(){
        $query = $this->pdo->prepare(
            "SELECT nom
            FROM t_thematiques
            WHERE thematique_id = ?"
        );
        $query->execute(array($_GET['thematique_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}