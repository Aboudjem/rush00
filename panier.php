<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Panier</title>
</head>
<?php include('./ressources/header.php'); ?>
<body>
    <div style="padding: 50px; text-align: center;">
        <a href="#"><div class="panier">
            <h3 class="artName" style="position: absolute; left: 10px; top: 20%;">Book</h3>
            <span class="tartif" >43€</span><br/>
            <?php if ($_SESSION["book"]){ ?><span> you have <?php echo $_SESSION["book"]; ?></span><?php } ?>
        </div></a>
    </div>
</body>
</html>