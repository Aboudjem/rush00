<header>
    <div class="menu">
        <a href="index.php" class='menu-link'>Accueil</a>
        <a href="articles.php" class='menu-link'>Articles</a>
        <a href="loginPage.php" class='menu-link'>Connexion</a>
        <a href="registerPage.php" class='menu-link'>S'enregistrer</a>
        <a href="panier.php" class='menu-link'>Panier</a>
        <?php if ($_SESSION['loggued_on_user']) { ?><a href="#" class='menu-link'><?php echo $_SESSION['loggued_on_user']; ?></a><?php } ?>
    </div>
</header>