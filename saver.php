<?php session_start();
    $_SESSION[$_GET['article']] += 1;
    header('Location: articles.php');
?>