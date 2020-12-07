<?php
// Définir la racine du projet ROOT avec l'autoload
define("ROOT", dirname(__DIR__));
require ROOT."/vendor/autoload.php";

header('Content-Type: text/html; charset=UTF-8');

// Lier l'index avec le router pour pouvoir naviguer entre les pages
require ROOT."/router.php";