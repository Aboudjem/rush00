<?php
session_start();
if (!file_exists("./private/panier.csv"))
	file_put_contents("./private/panier.csv", "");
$new = array();
$new = unserialize(file_get_contents("./private/panier.csv"));	
if($_SESSION['loggued_on_user'] && $_SESSION['commande'])
	$_SESSION['commande'] = $_SESSION['loggued_on_user'];
	$new[] = $_SESSION['commande'];
	file_put_contents("./private/panier.csv", serialize($new));
	header("Location: index.php");
?>