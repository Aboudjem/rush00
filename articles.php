<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Magasins</title>
</head>
<?php include('./ressources/header.php'); ?>
<body>
    <?php 
        
    $article = unserialize(file_get_contents("./private/bdd.csv"));
    
	if($cat = unserialize(file_get_contents("./private/cat.csv")))
	foreach ($cat as  $ckey => $cvalue) {
	    echo '<h2>Produits : '.$cvalue[name].'</h2>';
	   foreach ($article as $key => $value) {
	       if ($value['categorie'] == $cvalue[name] && $_SESSION[$value["name"]] < $value["stock"]) {
           echo'<a href="saver.php?article='.$value['name'].'">
                <div class="articles" style="background-image: url(\'ressources/'.$value['img'].'\') ;background-size:cover;">

                    <div style="padding: 50px; text-align: center;">
                        <h3 class="artName">'.$value['name'].'</h3>
                        <span class="tarif" >'.$value['price'].' €</span>
                    </div>';
                    if ($_SESSION[$value["name"]]){
                    echo '<span style="position:absolute; left:3px;"> you have';
                    echo $_SESSION[$value["name"]];
                    echo '</span>';
                    }
                echo '</div>
            </a>';
	       }
		}
	}
    ?>
</div>
</body>
</html>