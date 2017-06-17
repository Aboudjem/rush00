<?php session_start(); ?>
<?php
    if ($_SESSION["begin"] != true)
    {
        $_SESSION["book"] = 0;
    }
    $_SESSION["begin"] = true;
    if ($_GET["article"] == "book")
    {
        $_SESSION["book"] += 1;
    }
    header('Location: articles.php');
?>