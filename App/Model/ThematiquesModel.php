<?php
namespace App\Model;
use Core\Database;

// La classe ThematiquesModel permet de faire le lien entre le bdd et le controller
class ThematiquesModel extends Database {

    public function getThematique() {
        $query = $this->pdo->query(
            "SELECT *
            FROM t_thematiques"
        );
        return $query;
    }
}