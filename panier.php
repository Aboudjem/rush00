<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Panier</title>
</head>
<?php 
    include('./ressources/header.php'); ?>
<body>
    <h3>Cliquer pour enlever</h3>
<?php 
    $article = unserialize(file_get_contents("./private/bdd.csv"));
    
	if($cat = unserialize(file_get_contents("./private/cat.csv")))
	foreach ($cat as  $ckey => $cvalue) {
	   foreach ($article as $key => $value) {
	       if ($value['categorie'] == $cvalue[name] && $_SESSION[$value["name"]] > 0) {
			echo '<a href="./delone.php?article='. $value["name"] .'"><div class="panier">
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
</body>
</html>