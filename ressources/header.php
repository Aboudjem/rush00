<htlm>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<header>
    <div class="menu">
        <a href="index.php" class='menu-link'>Accueil</a>
        <a href="articles.php" class='menu-link'>Articles</a>
        <?php 
        	echo "<a href='panier.php' class='menu-link'>Panier</a>";
        	if (!$_SESSION['loggued_on_user'])
        	{
        		echo "<a href='loginPage.php' class='menu-link'>Connexion</a>";
       			echo "<a href='registerPage.php' class='menu-link'>S'enregistrer</a>";
	       	}
            else
            {
				echo "<a href='logout.php' class='menu-link'>Logout</a>";
         		echo "<a href='board.php' style='color:white; text-decoration:none; font-size:30px; margin-left:30px;' >".$_SESSION['loggued_on_user']."</a>"; 
        	}
            if ($_SESSION['log'])
                print($_SESSION['log']);
        ?>
    </div>
</header>
</htlm>