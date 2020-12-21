# Projet Fil Rouge
## Démarrer
### Pré-requis

Le projet Fil Rouge ne demande pas de pré-requis particulier.
En revanche, voici ce que vous devez avoir si vous souhaitez modifier le projet :
- Sass
- Node.js

### Installation

Pour installer Sass via l'invite de commande ou le terminal (attention, il faut être administrateur) :
Exécutez les commandes :
- ``node -v``
- ``npm -v``
Si les noms des versions s'affichent, cela veut dire que Node.Js et npm sont installés. Sinon, téléchargez-les.

Une fois cette vérification terminée, exécutez la commande ``npm install -g sass`` pour installer Sass.
Pour vérifier, exécutez ``sass --version``.

## Réalisé avec
### Outils

* [PHP](https://www.php.net) - Langage (PHP 7.4.9)
* [JQuery](https://jquery.com) - Librairie JavaScript
* [Sass](https://sass-lang.com) - Préprocesseur CSS (version 1.29.0 compiled with dart2js 2.10.3)
* [Visual Studio Code](https://code.visualstudio.com) - Editeur de Texte (version 1.51.1)

### Méthode
**Partie PHP**
J'ai utilisé l'architecture MVC (Modèle-Vue-Contrôleur) pour mon projet. Le principe est de séparer son code PHP en **trois** dossiers :
- le dossier **Modèle**, regroupant les fichiers liés à la base de données ;
- le dossier **Vue**, regroupant les fichiers visibles du site et comportant de l'HTML ;
- le dossier **Contrôleur**, regroupant les fichiers liant la base de données à la partie visible du site.

Documentation :
* [Modèle-Vue-Contrôleur](https://fr.wikipedia.org/wiki/Modèle-vue-contrôleur#:~:text=Modèle-vue-contrôleur%20ou%20MVC,les%20vues%20et%20les%20contrôleurs.)


**Partie SASS**
J'ai utilisé ici la **méthode SMACSS (Scalable and Modular Architexture for CSS)** qui reprend le principe du **Atomic Design (AD)** demandé.
Le principe est de créer son site à partir d'éléments déjà préparé qu'il ne reste plus qu'à placer.
Ces éléments sont appelés "Modules" (on peut comparer cela aux molécules de l'AD).
Le plus souvent, ces molécules sont elles-mêmes découpées à l'intérieur du fichier : ce sont les atomes de l'AD.

La nomenclature utilisée est celle accompagnant la méthode SMACSS.

Documentation :
* [SMACSS](http://smacss.com)
* [Organisation et convention de nommage](https://karac.ch/blog/organisation-et-convention-nommage-css)

## Auteur

Claire BRISBART, A2 DW2

## Projet Etudiant

Ce projet est un projet étudiant créé dans le cadre du cursus "Développement Web" à l'Institut de l'Internet et du Multimédia. C'est un projet s'étalant sur tous le semestre 1 (sept. 2020 - fin déc. 2020) et nous permettant de le modifier à chaque nouvelle compétence apprise.

[![forthebadge](https://forthebadge.com/images/badges/works-on-my-machine.svg)](http://forthebadge.com)