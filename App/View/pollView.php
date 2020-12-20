<?php include 'header.php'?>
        <main class="poll-main">
            <section>
                <h2>Jeux vidéo - <?= $question[0]["titre"] ?></h2>
                <p><?= $question[0]["question"] ?></p>
                <p class="uppercase">
                    <span>#Lorem</span>
                    <span>#LoremIpsum</span>
                </p>
            </section>  

            <div>
                <form>
                    <input class="hidden" type="text" value="1">
                    <input type="submit" value="<?= $answers[0]["reponse"] ?>">
                </form>
                <form>
                    <input class="hidden" type="text" value="1">
                    <input type="submit" value="<?= $answers[1]["reponse"] ?>">
                </form>
                <form>
                    <input class="hidden" type="text" value="1">
                    <input type="submit" value="<?= $answers[2]["reponse"] ?>">
                </form>
                <form>
                    <input class="hidden" type="text" value="1">
                    <input type="submit" value="<?= $answers[3]["reponse"] ?>">
                </form>
            </div>
        </main>
<?php include 'footer.php'?>