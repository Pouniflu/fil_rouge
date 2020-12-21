<?php include 'header.php'?>
        <main class="home-main">
            <!-- TITRE ET TEXTES -->
            <div>
                <!-- Titre -->
                <section class="home-main-title">
                    <h1>Hey you !</h1>
                    <p>Bienvenue sur Mozza, plateforme de paris et de sondages en ligne !</p>
                </section>

                <!-- Textes -->
                <section class="home-main-text">
                    <h2>Comment ça fonctionne ?</h2>
                    <p>Tu souhaites parier avec tes amis ou juste faire un sondage pour savoir quoi offrir à ta maman à Noël ? Mozza est la plateforme qu'il te faut, alors bienvenue !</p>
                    <img src="" alt="">
                    <p>Tu trouveras dans <span id="bold">Thématiques</span> toutes les catégories de paris. Clique sur une catégorie pour accéder à la liste des paris ! Tu dois être <span id="bold">connecté(e)</span> pour répondre ou <span id="bold">créer des paris</span>. Une fois connecté(e), tu auras accès à ton <span id="bold">profil</span> avec les paris que tu as créés !</p>

                    <!-- Bouton Invite tes amis -->
                    <a href="#" class="button-share uppercase">Invite tes amis !</a>

                    <!-- icônes des réseaux sociaux à insérer ici -->
                </section>
            </div>

            <!-- BOUTONS -->
            <div class="home-main-button">
                <a href="?page=thematiques">Thématiques</a>
                <a href="?page=classement">Classement</a>
                <a href="?page=createPollExplication">Créer un pari</a>
                <a href="?page=<?= $redirection ?><?= $userID ?>" class="capitalize"><?= $redirection ?></a>
            </div>

        </main>
<?php include 'footer.php'?>