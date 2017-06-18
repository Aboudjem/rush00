<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login</title>
</head>
<?php include('./ressources/header.php'); ?>
<body>
    <div class="form_login">
        <h1>Connexion</h1>
        <form action="login.php" method="POST">
           Identifiant: <input type="text" name="login" />
           Mot de passe: <input type="password" name="passwd" />
           <input type="submit" value="OK" name="submit" />
       </form>
   </div>
   <a class='lien' href="create.html">Créer mon compte</a><br>
   <a class='lien' href="modif.html">Modifier mon mot de passe</a><br>
   <a class='lien' href="del_user_2.html">Supprimer mon compte</a><br>
</body>
</html>