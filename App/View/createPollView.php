<?php include 'header.php'?>
        <main class="createPoll-main">
            <a href="?page=createPollExplication" class="button-return">Retour à la page précédente</a>

            <section class="createPollExplication-title">
                <h2 class="uppercase">Espace
                    <br>Créer un pari
                </h2>
            </section>

            <section class="createPoll-text">
                <img src="" alt="">    
                <h2>A toi de jouer !</h2>
                <p>Si tu as oublié comment créer un pari, reviens à la page précédente en cliquant en haut à gauche !</p>
            </section>
            
            <form method="POST">
                <?= $createPollMessage ?>
                <div class="createPoll-creation">
                    <div class="createPoll-creation-select">
                        <label for="selection">Sélectionne la thématique du pari :</label>
                        <select name="thematique" id="selection">
                            <!-- Insertion des thématiques -->
                        </select>
                    </div>
                    <input type="text" aria-label="insert title" name="title" placeholder="Insérez ici le titre du pari">
                    <input type="text" aria-label="insert question" name="question" placeholder="Insérez ici la question">
                    <input type="text" aria-label="insert choice 1" name="answer1" placeholder="Choix 1">
                    <input type="text" aria-label="insert choice 2" name="answer2" placeholder="Choix 2">
                    <input type="text" aria-label="insert choice 3" name="answer3" placeholder="Choix 3">
                    <input type="text" aria-label="insert choice 4" name="answer4" placeholder="Choix 4">
                </div>
                <input type="submit" value="Valider" class="button-validation uppercase">
            </form>


        </main>
<?php include 'footer.php'?>