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
        
	$cat = unserialize(file_get_contents("./private/cat.csv"));
	$article = unserialize(file_get_contents("./private/bdd.csv"));
	
	foreach ($cat as  $ckey => $cvalue) {
	    echo '<h2>Produits : '.$cvalue[name].'</h2>';
	   foreach ($article as $key => $value) {
	       if ($value['categorie'] == $cvalue[name] && $_SESSION[$value["name"]] < $value["stock"]) {
			echo '<a href="./saver.php?article='. $value["name"] .'"><div class="panier">
            <div style="padding: 50px; text-align: center;">
                <h3 class="artName" style="position: absolute; left: 10px; top: 20%;">'.$value["name"].'</h3>
                <span class="tartif" >'.$value["price"].' €</span><br/>';
                if ($_SESSION[$value["name"]]){
                    echo '<span> you have';
                    echo $_SESSION[$value["name"]];
                    echo '</span>';
                }
                echo '</div></div>
            </a>';
	       }
		}
	}
    ?>
</div>
</body>
</html>