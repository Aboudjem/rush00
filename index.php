<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>42-Market</title>
</head>
<header>
    <?php include('./ressources/header.php'); ?>
</header>
<body>
<div class="logo">
<?php
$user = unserialize(file_get_contents("./private/passwd"));
$cat = unserialize(file_get_contents("./private/cat.csv"));
$article = unserialize(file_get_contents("./private/bdd.csv"));

foreach ($article as $key => $value) {
	print("<br>".$value['name']." ".$value['price']." ".$value['stock']." ".$value['categorie']);
}
?>
<h1>Bienvenue sur 42-Market</h1><img src="42.png"><h2>Pour continuer <a href="login.html">loggez-vous</a> ou <a href="register.html">enregistrez-vous.</a></h2></div>
</body>
</html>