<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Magasins</title>
</head>

<body>
    <?php
    if ($bdd = unserialize(file_get_contents('private/bdd.csv')))
        foreach ($bdd as $key => $value) {
            print($value['name']."");
        }
    ?>

        <a href="saver.php?article=book"><div class="articles">
            <div style="padding: 50px; text-align: center;">
            <h3 class="artName">Book</h3>
                <span class="tartif" >43€</span><br/>
                <?php if ($_SESSION["book"]){ ?><span> you have <?php echo $_SESSION["book"]; ?></span><?php } ?>
            </div>
        </a>
    </div>
</body>
</html>