<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Register</title>
</head>
<?php include('./ressources/header.php'); ?>
<body>
    <div class="form_login" style="background-color: rgba(32,33,35, 0.4);">
        <h1>S'inscrire</h1>
        <form action="register.php" method="POST">
            Identifiant: <input type="text" name="login" />
            Mot de passe: <input type="password" name="passwd" />
            <input type="submit" value="OK" name="submit" />
        </form>
    <a href="login.html">Connexion</a><br>
    <a href="modif.html">Modifier mon mot de passe</a><br>
    </div>
</body>
</html>