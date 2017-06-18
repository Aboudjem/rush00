<?php
session_start();
if (!file_exists("./private/panier.csv"))
	file_put_contents("./private/panier.csv", "");
$new = array();
print_r($_SESSION['commande']);
$new = unserialize((file_get_contents("./private/panier.csv")));	
if($_SESSION['loggued_on_user'] && $_SESSION['commande'])
	$new[$_SESSION['loggued_on_user']] = $_SESSION['commande'];
	file_put_contents("./private/panier.csv", $new);
	// print_r($new);
	?>