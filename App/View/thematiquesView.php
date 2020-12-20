<?php include 'header.php'?>
        <main class="thematiques-main">
            <section>
                <h2 class="uppercase">Thématiques</h2>
                <input type="text" placeholder="Rechercher">
                <div>
                    <img src="" alt="">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>
            </section>

            <section>
                <h3 class="uppercase">Clique sur le thème de ton choix !</h3>
                <ul id="thematiques-link">
                    <?php foreach($thematiques as $thematique): ?>
                    <li><a href="?page=polls&thematique_id=<?= $thematique['thematique_id'] ?>"><?= $thematique['nom']?></a></li>
                    <?php endforeach ?>
                </ul>
            </section>
        </main>
<?php include 'footer.php'?>