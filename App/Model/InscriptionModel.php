<?php
namespace App\Model;
use Core\Database;

// La classe SignInModel permet de faire le lien entre le bdd et le controller
class InscriptionModel extends Database {

    // Création d'une fonction signInUser
    public function signInUser(){
        if(isset($_POST['formInscription']))
        {
            // Création d'un array avec toutes les informations que l'utilisateur doit saisir pour s'inscrire
            $userData = [
                "pseudo" => htmlspecialchars($_POST['pseudo']),
                "email" => htmlspecialchars($_POST['email']),
                "password" => password_hash($_POST['password'], PASSWORD_BCRYPT),
                "password2" => password_hash($_POST['password2'], PASSWORD_BCRYPT),
            ];

            // Si les informations récupérées dans les variables ne sont pas vides
            if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
                
                // On récupère dans une variable le pseudo que l'utilisateur a renseigné
                $pseudolength = strlen($userData["pseudo"]);

                // Vérification à chaque information si l'utilisateur respecte bien les critères
                if($pseudolength <= 60){

                    // On vérifie que l'utilisateur à bien mis un email (c'est-à-dire que l'information rentrée contient bien un @)
                    if(filter_var($userData["email"], FILTER_VALIDATE_EMAIL)) {

                        if($_POST["password"] == $_POST["password2"]) {
                            $insertmbr = $this->pdo->prepare("INSERT INTO t_utilisateurs(pseudo, email, password, online) VALUES(?, ?, ?, 0)");
                            $catch = $insertmbr->execute(array($userData["pseudo"], $userData["email"], $userData["password"]));
                            if (!$catch) {
                                return "Ce pseudo est déjà utilisé";
                            }
                            header("location: ?page=home");
                        } else {
                            return "Vos mdp sont différents";
                        }
                    } else {
                        return "Ton adresse mail n'est pas valide !";
                    }
                } else {
                    return "Votre pseudo ne doit pas dépasser 60 caractères";
                }
            } else {
                return "*Tous les champs doivent être complétés";
            }
        }
    }
}