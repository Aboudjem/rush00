<?php 
session_start();
$file = "private/passwd";
$bdd = unserialize(file_get_contents($file));
if ($_POST['username']){
	foreach($bdd as $i => $v){
		if ($v['login'] === $_POST['username']){
			if ($v['login'] === 'admin')
				header('Location: logout.php');
			else
				header('location: admin.php');
			unset($bdd[$i]);
		}
	}
}
file_put_contents("private/passwd", serialize($bdd));
?>