<?php session_start(); ?>
<?php
if ($_SESSION['loggued_on_user'] == 'admin')
{
    header('Location: admin.php');
    return;
}
else
    header('Location: index.php');
include('./ressources/header.php');
$user = unserialize(file_get_contents("./private/passwd"));
$cat = unserialize(file_get_contents("./private/cat.csv"));
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>board</title>
</head>
<body>
<hr>
<hr>

</body>
</html>