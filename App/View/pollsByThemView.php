<?php include 'header.php'?>
        <main class="pollsByThem-main">
            <div>
                <section>
                    <img src="" alt="">
                    <h2 class="uppercase">Thématiques</h2>
                </section>
            </div>    

            <div>
                <table>
                    <?php foreach($pollsByThem as $pollByThem):?>
                    <tr>
                        <td><img src="" alt=""></td>
                        <td><?= $pollByThem['titre']?></td>
                        <td class="uppercase">#Lorem Ipsum</td>
                        <td><a href="?page=poll&sondage_id=<?= $pollByThem['sondage_id']?>">GO</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </main>
<?php include 'footer.php'?>