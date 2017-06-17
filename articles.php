<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<header>
    <div class="menu">
        <a href="index.html" class='menu-link'>Accueil</a>
        <a href="articles.php" class='menu-link'>Articles</a>
        <a href="login.html" class='menu-link'>Connexion</a>
        <a href="register.html" class='menu-link'>S'enregistrer</a>
        <a href="panier.html" class='menu-link'>Panier</a>
    </div>
</header>
<body>
    <div style="padding: 50px; text-align: center;">
        <a href="saver.php?article=book"><div class="articles">
            <h3 class="artName">Book</h3>
            <span class="tartif" >43€</span><br/>
            <?php if ($_SESSION["book"]){ ?><span> you have <?php echo $_SESSION["book"]; ?></span><?php } ?>
        </div></a>
    </div>
</body>
</html>