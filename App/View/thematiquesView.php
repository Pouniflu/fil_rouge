<?php include 'header.php'?>
        <main class="thematiques-main">
            <a href="?page=home" class="button-return">Retour à la page d'accueil</a>
            <div>
                <div class="thematiques-header">
                    <section>
                        <img src="" alt="">
                        <h2 class="uppercase">Thématiques</h2>
                    </section>
                </div> 
                <input type="text" class="search-bar" placeholder="Rechercher">
                <div class="thematiques-text">
                    <img src="" alt="">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt 
                        <br>ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>
            </div>

            <section class="thematiques-choice">
                <h3 class="uppercase">Clique sur le thème de ton choix !</h3>
                <ul class="thematiques-link">
                    <?php foreach($thematiques as $thematique): ?>
                    <li><a href="?page=polls&thematique_id=<?= $thematique['thematique_id'] ?>"><?= $thematique['nom']?></a></li>
                    <?php endforeach ?>
                </ul>
            </section>
        </main>
<?php include 'footer.php'?>