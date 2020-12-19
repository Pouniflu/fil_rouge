<?php include 'header.php'?>
    <main class="profil-main">
        <!-- Fond -->
        <div>
        </div>

        <!-- Vignette du profil -->
        <div class="profil-main-user">
            <img alt="">
            <section>
                <h2>Jean Eude</h2>
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
                        <h4>Top Chef</h4>
                        <div>
                            <p>Lien</p>
                            <img src="" alt="">
                        </div>
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
                        <input type="text" id="identifiant">
                        <label for="email">Adresse email</label>
                        <input type="text" id="email">
                    </div>
                </div>
            </section>
        </div>

    </main>
<?php include 'footer.php'?>