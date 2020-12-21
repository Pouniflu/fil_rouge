<?php include 'header.php'?>
        <main class="poll-main">
            <a href="?page=polls&thematique_id=<?= $thematique[0]['thematique_id'] ?>" class="button-return">Retour à la page précédente</a>
            <section class="poll-title">
                <h2><?= $thematique[0]['nom'] ?> - <?= $question[0]["titre"] ?></h2>
                <p><?= $question[0]["question"] ?></p>
                <p class="uppercase">
                    <span>#Lorem</span>
                    <span>#LoremIpsum</span>
                </p>
            </section>  

            <div>
                <form class="poll-button">
                    <input class="hidden" type="text" value="1">
                    <input type="submit" class="uppercase" value="<?= $answers[0]["reponse"] ?>">
                </form>
                <form class="poll-button">
                    <input class="hidden" type="text" value="1">
                    <input type="submit" class="uppercase" value="<?= $answers[1]["reponse"] ?>">
                </form>
                <form class="poll-button">
                    <input class="hidden" type="text" value="1">
                    <input type="submit" class="uppercase" value="<?= $answers[2]["reponse"] ?>">
                </form>
                <form class="poll-button">
                    <input class="hidden" type="text" value="1">
                    <input type="submit" class="uppercase" value="<?= $answers[3]["reponse"] ?>">
                </form>
            </div>
        </main>
<?php include 'footer.php'?>