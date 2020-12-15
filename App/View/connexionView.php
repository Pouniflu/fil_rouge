<?php

/**
 * @var $message;
 */

?>

<?php include 'header.php'?>

    <main class="connexion-main">
        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?page=home" class="button-return">Retour à la page d'accueil</a>

        <!-- Formulaire d'inscription -->
        <form method="POST" action="" class="connexionForm">

                <!-- Titre du formulaire -->
                <h2 class="uppercase">Connexion</h2>

                <!-- Identifiant -->
                <label for="pseudo">Identifiant</label>
                <input type="text" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">

                <!-- Mot de passe -->
                <label for="password">Mot de Passe</label>
                <input type="password" id="password" name="password">

                <!-- Si l'utilisateur n'est pas encore inscrit -->
                <a href="?page=inscription" class="button-inscription">Pas encore inscrit ?</a>

                <!-- Validation de la connexion -->
                <input type="submit" name="formInscription" value="Valider" class="button-validation uppercase">
                
                <?php if (!is_null($message)) { ?>
                    <p id="red"><?= $message ?></p>
                <?php  } ?>
        </form>

    </main>

<?php include 'footer.php'?>