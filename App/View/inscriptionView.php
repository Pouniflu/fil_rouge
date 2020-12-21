<?php

/**
 * @var $message;
 */

?>

<?php include 'header.php'?>

    <main class="inscription-main">
        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?page=connexion" class="button-return">Retour à la page précédente</a>

        <!-- Formulaire d'inscription -->
        <form method="POST" action="" class="inscriptionForm">

                <!-- Titre du formulaire -->
                <h2 class="uppercase">Inscription</h2>

                <!-- Identifiant -->
                <label for="pseudo">Identifiant</label>
                <input type="text" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">

                <!-- Email -->
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">

                <!-- Mot de passe -->
                    <label for="password">Mot de Passe</label>
                    <input type="password" id="password" name="password">

                <!-- Confirmation du mot de passe -->
                    <label for="password2">Confirmation du mot de Passe</label>
                    <input type="password" id="password2" name="password2">

                <!-- Validation de l'inscription -->
                    <input type="submit" name="formInscription" value="Valider" class="button-validation uppercase">
                
                <?php if (!is_null($message)) { ?>
                    <p id="error"><?= $message ?></p>
                <?php  } ?>
        </form>

    </main>

<?php include 'footer.php'?>