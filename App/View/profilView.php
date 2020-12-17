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
                    <img alt="" id="open-list">
                    <img alt="" id="close-list">
                </h2>
                <div id="hidden">
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
                    <img alt="">
                </h2>
            </section>

            <section class="profil-main-list">
                <h2 class="uppercase">
                    Anciens paris
                    <img alt="">
                </h2>
            </section>

            <section class="profil-main-list">
                <h2 class="uppercase">
                    Paramètres
                    <img alt="">
                </h2>
            </section>
        </div>

    </main>
<?php include 'footer.php'?>