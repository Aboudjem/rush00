<?php session_start(); ?>
<?php
    $_SESSION[$_GET['article']] -= 1;
    header('Location: panier.php');
?>