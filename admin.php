<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<header>
    <div class="menu">
        <a href="index.html" class='menu-link'>Accueil</a>
        <a href="login.html" class='menu-link'>Connexion</a>
        <a href="register.html" class='menu-link'>S'enregistrer</a>
        <a href="panier.html" class='menu-link'>Panier</a>
    </div>
</header>
<body>
    <div class="form_login">
        <h1>Admin</h1>
        <?php
        print("Vous etes <b><span style='color:#f21d5d; font-size:30px;'>".$_SESSION['loggued_on_user']."</span><br>");
        if (!file_exists("private/passwd"))
            file_put_contents("private/passwd", "");
        if($bdd = unserialize(file_get_contents("private/passwd")))
            foreach($bdd as $i => $v)
                print("Login --> <b><span style='color:#f21d5d; font-size:30px;'>[".$v['login']."]</b> MdP --> <b>[".$v['passwd']."]</b></span></br>");
                    ?>
            </div>
        </body>
        </html>

