<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/import.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <title>Mozza</title>
    </head>
    <?php
        if(!empty($_SESSION['user_id'])) {
            $redirectionNav = "deconnexion";
        } else {
            $redirectionNav = "connexion";
        }

    ?>
    <body>
        <header class="uppercase">
            <a href="?page=home" class="header-title">Mozza</a>
            <nav class="header-nav">
                <a href="?page=thematiques">Thématiques</a>
                <a href="?page=classement">Classement</a>
                <a href="?page=createPoll">Créer un pari</a>
                <a href="?page=<?= $redirectionNav ?>"><?= $redirectionNav ?></a>
            </nav>
        </header>