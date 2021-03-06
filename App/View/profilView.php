<?php include 'header.php'?>
    <main class="profil-main">
        <!-- Fond -->
        <div>
        </div>

        <a href="?page=home" class="button-return">Retour à la page d'accueil</a>
        
        <!-- Vignette du profil -->
        <div class="profil-main-user">
            <img alt="">
            <section>
                <h2 class="capitalize"><?= $user[0]['pseudo']?></h2>
                <div class="uppercase">1000 points</div>
            </secion>
        </div>
        
        <!-- Div avec toutes les options déroulantes -->
        <div class="profil-main-choice">
            <section class="profil-main-list">
                <h2 class="uppercase">
                    Liste d'amis
                    <img alt="" id="open-list-friend">
                    <img alt="" id="close-list-friend">
                </h2>
                <div>
                    <section class="profil-main-list-friend">
                        <img>
                        <h3>Nicolas Duval</h3>
                        <p>2000 points</p>
                        <img>
                    </section>
                </div>
            </section>

            <section class="profil-main-list">
                <h2 class="uppercase">
                    Pari(s) actif(s)
                    <img alt="" id="open-list-pari">
                    <img alt="" id="close-list-pari">
                </h2>
                <div>
                    <section class="profil-main-list-pari">
                        <?php foreach($polls as $poll):?>
                        <h4><?= $poll["titre"] ?></h4>
                        <div>
                            <p><a href="?page=poll&sondage_id=<?= $poll['sondage_id']?>">Lien</a></p>
                            <img src="" alt="">
                        </div>
                        <?php endforeach; ?>
                    </section>
                </div>
            </section>

            <section class="profil-main-list">
                <h2 class="uppercase">
                    Anciens paris
                    <img alt="" id="open-list-lastPari">
                    <img alt="" id="close-list-lastPari">
                </h2>
                <div>
                    <p class="profil-main-list-lastPari">WOW</p>
                </div>
            </section>

            <section class="profil-main-list">
                <h2 class="uppercase">
                    Paramètres
                    <img alt="" id="open-list-param">
                    <img alt="" id="close-list-param">
                </h2>
                <div>
                    <div class="profil-main-list-param">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" id="identifiant" placeholder="<?= $_SESSION['pseudo']?>">
                        <label for="email">Adresse email</label>
                        <input type="text" id="email" placeholder="<?= $_SESSION['email']?>">
                    </div>
                </div>
            </section>
        </div>

    </main>
<?php include 'footer.php'?>