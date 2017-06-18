<?php session_start(); ?>
<?php
$_SESSION[$_GET['article']] -= 1;
if($_SESSION[$_GET['article']] < 0)
	$_SESSION[$_GET['article']] = 0;
header('Location: panier.php');
?>