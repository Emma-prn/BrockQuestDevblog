<!DOCTYPE html>
<?php 
    require "connexion.php";
    $link->query("SET NAMES utf8");
    $id = $_GET["id"];
    $requete = "SELECT * FROM article WHERE id = '$id'";
    $stmt = $link->prepare($requete);
    $stmt-> execute();
    $post = $stmt->fetch();
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
    <title>Brock's Quest Remastered - Devblog</title>
</head>
<body>
    <nav id="nav" class="sticky">
        <a href="index.php">Brock's Quest Remastered</a>
        <aside>
            <a href="index.php">Accueil</a>
            <a href="devblog.php">Devblog</a>
        </aside>
    </nav>
    <div class="container post">
        <h1 class="h1-post"><?php echo $post['titre']; ?></h1>
        <img class="post-first-img" src='<?php echo $post['photo_ap']; ?>' alt="">
        <p class="post-text"><?php echo $post['partie1']; ?></p>
        <img class="post-img" src='<?php echo $post['photo1']; ?>' alt="">
        <p class="post-text"><?php echo $post['partie2']; ?></p>
        <img class="post-img" src='<?php echo $post['photo2']; ?>' alt="">
        <p class="post-text"><?php echo $post['partie3']; ?></p>
        <img class="post-img" src='<?php echo $post['photo3']; ?>' alt="">
        <p class="post-text"><?php echo $post['partie4']; ?></p>
        <img class="post-img" src='<?php echo $post['photo4']; ?>' alt="">
        <p class="post-text"><?php echo $post['partie5']; ?></p>
        <img class="post-img" src='<?php echo $post['photo5']; ?>' alt="">
    </div>
    <footer><p>Site crée par Emma Pernin - 2023</p></footer>
</body>
</html>