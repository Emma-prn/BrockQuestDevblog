<!DOCTYPE html>
<?php 
    require "connexion.php";
    $link->query("SET NAMES utf8");
    $requete = "SELECT * FROM article ORDER BY id DESC";
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
    <title>Brock's Quest Remastered - Devblog</title>
</head>
<body>
    <header class="header-devblog">
        <div class="header-container">
            <h1 class="header-title">Devblog</h1>
        </div>
        <div class="header-overlay"></div>
    </header>
    <nav id="nav" class="sticky">
        <a href="index.php">Brock's Quest Remastered</a>
        <aside>
            <a href="index.php">Accueil</a>
            <a href="devblog.php">Devblog</a>
        </aside>
    </nav>
    <div class="container">
        <?php 
            foreach ($posts as $post) {
                if ($post["id"] % 2 == 0) {
                    echo "<section class='reverse'>";
                } else {
                    echo "<section>";
                }
                echo"
                <aside class='pres-aside'>
                    <h2 class='post-title'>".$post["titre"]."</h2>
                    <p class='post-pres'>".mb_strimwidth($post["partie1"], 0, 140, "...")."
                    </p>
                    <a href='post.php?id=".$post['id']."' class='pres-button'>Lire</a>
                </aside>
                <img class='pres-img' src=".$post["photo_ap"]." alt=''>
            </section>";   
            }
        ?>
    </div>
    <footer><p>Site crée par Emma Pernin - 2023</p></footer>
</body>
</html>