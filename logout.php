<?php
session_start();
if ($_SESSION['loggued_on_user']){
	$_SESSION = [];
	session_destroy();
}
header('location: index.php');
?>