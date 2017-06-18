<?php session_start(); 
if ($_SESSION['loggued_on_user'] != 'admin')
  header('Location: index.php');
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Login</title>
</head>
<?php 
include('./ressources/header.php');
?>
<form action="admin.php" method="POST">
    <select name="name">
        <option value="article">article</option>
        <option value="cat">cat</option>
        <option value="user">user</option>
    </select>
    <input style="margin-top: 25px; font-size: 20px;" type="submit" name="submit" value="OK">
</form>
<?php
if ($_POST['name'] == "article")
  include('./tab/add_article.php'); 
else if ($_POST['name'] == "cat")
{
   include('./tab/add_cat.php'); 
   include('./tab/modif_cat.php'); 
   include('./tab/delete_cat.php'); 
}
else if ($_POST['name'] == "user")
   include('./tab/delete_user.php'); 
?>


</body>
</html>