<?php
namespace App\Model;
use Core\Database;

// La classe HomeModel permet de voir si l'utilisateur est connecté ou non sur la page d'accueil.
class HomeModel {

    public function connexion() {
        session_start();

        if(!empty($_SESSION['user_id'])) {
            return "profil";
        } else {
            return "connexion";
        }
    }

    public function userID() {

        if(!empty($_SESSION['user_id'])) {
            return "&user_id=" . $_SESSION['user_id'];
        } else {
            return "";
        }
    }
}