<!DOCTYPE html>
<?php 
    require "connexion.php";
    $link->query("SET NAMES utf8");
    $requete = "SELECT * FROM article ORDER BY id DESC LIMIT 3";
    $stmt = $link->prepare($requete);
    $stmt-> execute();
    $posts = $stmt->fetchall(PDO::FETCH_ASSOC);
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Marcellus+SC&display=swap" rel="stylesheet">
    <title>Brock's Quest Remastered</title>
</head>
<body>
    <header class="header-acc">
        <div class="header-container">
            <h1 class="header-title">Brock's Quest Remastered</h1>
            <a href="#nav" class="header-button">Découvrir</a>
        </div>
        <div class="header-overlay"></div>
    </header>
    <div class="container">
        <nav id="nav">
            <a href="index.php">Brock's Quest Remastered</a>
            <aside>
                <a href="index.php">Accueil</a>
                <a href="devblog.php">Devblog</a>
            </aside>
        </nav>
        <section>
            <aside class="pres-aside">
                <h2>Brock's Quest : Les Origines</h2>
                <p>Mars 2018, début du dernier trimestre de l'année de Terminale. Le dernier projet pour la spécialité ISN est annoncé. Le sujet est libre mais il doit être réalisé avec un langage de programmation et bien entendu en binôme. Étant toutes deux des fans de jeux vidéo d'aventure, nous avons décidé d'en créer un et c'est de cette manière que Brock's Quest est né.
                <br><br>
                Le jeu est développé avec Pygame et codé en Python. On y incarne Brock dont le but est de combattre les différents monstres qu'il trouve sur son chemin. Il se déplace alors de map en map pour arriver jusqu'au boss de fin et sauver le village.
                </p>
                <a href="https://www.youtube.com/watch?v=D7aM45RFlvs" target="_blank" class="pres-button">Démo</a>
            </aside>
            <img class="pres-img" src="img/BQV1.png" alt="">
        </section>
        <section class="reverse">
            <aside class="pres-aside">
                <h2>Brock's Quest Remastered</h2>
                <p>Lors de la troisième année à l'IMAC, nous devions réaliser un projet personnel individuel en lien avec notre spécialité. Étant en spécialité programmation 3D, j'ai décidé de réaliser un jeu avec Unity afin d'apprendre le fonctionnement de ce moteur de jeu. C'était alors une bonne occasion pour retravailler sur Brock's Quest, améliorer certains éléments ainsi que d'en ajouter certains. C'est donc en janvier 2023 que Brock's Quest Remastered voit le jour.
                <br><br>
                Le Devblog de ce site va servir à montrer l'avancée dans la réalisation du jeu : le redesign de Brock, la création des maps, le système de combat …
                </p>
                <a href="https://github.com/Emma-prn/BrockQuestV2" target="_blank" class="pres-button">Github</a>
            </aside>
            <img class="pres-img" src="img/BQV2.png" alt="">
        </section>
    </div>
    <div class="container">
        <h2>Derniers articles</h2>
        <section>
            <?php 
                foreach ($posts as $post) {
                    echo" <a href='post.php?id=".$post['id']."'>
                        <article class='card'>
                            <img class='card-img' src=".$post["photo_ap"]." alt=''>
                            <h3>".$post["titre"]."</h3>
                            <p>".mb_strimwidth($post["partie1"], 0, 140, "...")."</p>
                        </article>
                    </a>";   
                }
            ?>
        </section>
    </div>
    <footer><p>Site crée par Emma Pernin - 2023</p></footer>
</body>
</html>