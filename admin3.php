<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Login</title>
</head>
<?php 
include('./ressources/header.php');
$file = "./private/passwd";
$user = unserialize(file_get_contents($file));
$cat = unserialize(file_get_contents("private/cat.csv"));
?>
<?php include('./tab/add_article.php'); ?>
<?php include('./tab/add_cat.php'); ?>
<?php include('./tab/delete_cat.php'); ?>
<?php include('./tab/delete_user.php'); ?>
<?php include('./tab/modif_cat.php'); ?>

<hr>


<hr>

</body>
</html>