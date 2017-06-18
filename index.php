<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>42-Market</title>
</head>
<header>
	<?php include('./ressources/header.php'); ?>
</header>
<body>
	<div class="logo">
		<?php
		if($article = unserialize(file_get_contents("./private/bdd.csv")))
			foreach ($article as $key => $value) {
				echo '
				<a href="saver.php?article='.$value['name'].'">
					<div class="articles" style="background-image: url(\'ressources/'.$value['img'].'\') ;background-size:cover;">

						<div style="padding: 50px; text-align: center;">
							<h3 class="artName">'.$value['name'].'</h3>
							<span class="tarif" >'.$value['price'].' €</span>
						</div>
					</div>
				</a>';
			}
			if (!$_SESSION['loggued_on_user'])
				echo '<h1>Bienvenue sur 42-Market</h1><img title="42" style="box-shadow: -1px 2px 5px 1px #986E6D;" src="42.png"><h2>Pour continuer <a href="login.html" style="color: ##986E6D;">loggez-vous</a> ou <a style="color: ##986E6D;"nh href="register.html">enregistrez-vous.</a></h2></div>';
			?>
		</body>
		</html>