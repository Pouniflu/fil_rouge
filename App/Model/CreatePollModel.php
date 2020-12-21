<?php
namespace App\Model;
use Core\Database;

class CreatePollModel extends Database {

    // Création d'une méthode createPoll()
    public function createPoll() {
        
        // On ouvre la session de l'utilisateur connecté pour pouvoir récupérer par la suite ses informations
        session_start();

        if($_POST) {

            // Récupération du titre, de la question posée et de toutes les réponses dans un tableau answers
            $title = htmlspecialchars($_POST['title']);
            $question = htmlspecialchars($_POST['question']);
            $answers = [
                "answer1" => htmlspecialchars($_POST['answer1']),
                "answer2" => htmlspecialchars($_POST['answer2']),
                "answer3" => htmlspecialchars($_POST['answer3']),
                "answer4" => htmlspecialchars($_POST['answer4'])
            ];

            if(!empty($_SESSION)) {
                if (!empty($_POST['title']) AND !empty($_POST['question']) AND !empty($_POST['answer1']) AND !empty($_POST['answer2']) AND !empty($_POST['answer3']) AND !empty($_POST['answer4'])) {

                    $them = $this->pdo->prepare(
                        "SELECT thematique_id
                        FROM t_thematiques
                        WHERE nom = ?"
                    );
                    $them->execute(array($_POST['thematique']));
                    $thematique = $them->fetchAll();

                    // Injection SQL : envoi de la question et de la durée dans la table t_sondages si les informations ne sont pas vides
                    $sendQuestion = $this->pdo->prepare(
                        "INSERT INTO t_sondages (creator_id, thematique_id, titre, question, activite)
                        VALUE (?, ?, ?, ?, 'open')
                    ");
                    $sendQuestion->execute(array($_SESSION['user_id'], $thematique[0]['thematique_id'] , $_POST['title'], $_POST['question']));
    
                    // Select du sondage ID créé
                    // lastInsertId() permet de récupérer le dernier auto-increment inséré dans la table
                    $selectPollID = $this->pdo->lastInsertId();
    
                    // Injection SQL : envoi des réponses dans la table t_reponses
                    $sendAnswers = $this->pdo->prepare(
                        "INSERT INTO t_reponses (sondage_id, reponse)
                        VALUE (?, ?)
                        ");
                    $sendAnswers->execute(array($selectPollID, $answers['answer1']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer2']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer3']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer4']));
    
                    // Si le sondage a bien été créé, on en informe l'utilisateur
                    return "<p id=\"correct\">Le sondage a bien été créé !<p>";
    
                } else {
                    // Si un ou plusieurs champs ne sont pas remplis, on en informe l'utilisateur.
                    return "<p id=\"error\">Un ou plusieurs champs ne sont pas pas remplis<p>";
                }
            } else {
                // Si l'utilisateur n'est pas connecté, on lui en informe.
                return "<p id=\"error\">Vous devez d'abord vous connecter !<p>";
            }
            
        }
    }
}