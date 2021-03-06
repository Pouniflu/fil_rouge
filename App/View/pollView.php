<?php include 'header.php'?>
        <main class="poll-main">
            <a href="?page=polls&thematique_id=<?= $thematique[0]['thematique_id'] ?>" class="button-return">Retour à la page précédente</a>
            <section class="poll-title">
                <h2><?= $thematique[0]['nom'] ?> - <?= $question[0]["titre"] ?></h2>
                <p><?= $question[0]["question"] ?></p>
                <p class="uppercase">
                    <span class="hashtag">#Lorem</span>
                    <span class="hashtag">#LoremIpsum</span>
                </p>
            </section>  

            <div id="question">
                <form method="post" class="poll-button" id="form1">
                    <input name="ans" type="hidden" value="<?= $answers[0]["reponse_id"] ?>">
                    <input type="submit" name="submit1" class="uppercase submit1" value="<?= $answers[0]["reponse"] ?>">
                </form>
                <form method="post" class="poll-button" id="form2">
                    <input name="ans" type="hidden" value="<?= $answers[1]["reponse_id"] ?>">
                    <input type="submit" name="submit2" class="uppercase submit2" value="<?= $answers[1]["reponse"] ?>">
                </form>
                <form method="post" class="poll-button" id="form3">
                    <input name="ans" type="hidden" value="<?= $answers[2]["reponse_id"] ?>">
                    <input type="submit" name="submit3" class="uppercase submit3" value="<?= $answers[2]["reponse"] ?>">
                </form>
                <form method="post" class="poll-button" id="form4">
                    <input name="ans" type="hidden" value="<?= $answers[3]["reponse_id"] ?>">
                    <input type="submit" name="submit4" class="uppercase submit4" value="<?= $answers[3]["reponse"] ?>">
                </form>
            </div>

            <div id="result">
                <div class="poll-result" id="div1"></div>
                <div class="poll-result" id="div2"></div>
                <div class="poll-result" id="div3"></div>
                <div class="poll-result" id="div4"></div>
            </div>

        </main>
<?php include 'footer.php'?>