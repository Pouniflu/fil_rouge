<?php
namespace App\Model;
use Core\Database;

class Getvote extends Database {

    public function Vote(){

        session_start();
        $query-> $this->pdo->prepare(
            "INSERT INTO t_votes (user_id, sondage_id, vote)
            VALUES (?, ?, ?)"
        );
        // sondage_id = $_GET['sondage_id']
        // user_id = $_SESSION['user_id']

        if (isset($_POST['sub1'])) {

            $query-> $this->pdo->prepare(
                "INSERT INTO t_votes (user_id, sondage_id, vote)
                VALUES (?, ?, ?)"
            );
            // sondage_id = $_GET['sondage_id']
            // user_id = $_SESSION['user_id']
            // vote = $_POST['ans1'].value ? $_POST['ans1']['value'] ?

        } else if(isset($_POST['sub2'])){

        } else if(isset($_POST['sub3'])) {

        } else if(isset($_POST['sub4'])) {

        }
    }

    public function getVote(){
        $query-> $this->pdo->query(
            "SELECT vote
            FROM t_votes
            WHERE sondage_id = ?"
        );
    }
}

