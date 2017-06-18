<?php session_start();

if (($_POST['submit']) && ($_POST['login']) !== '' && ($_POST['pw']) !== '')
{
	if (!file_exists("private/passwd"))
		print_error();
	$user['login'] = ($_POST['login']);
	$user['pw'] = (hash(sha224,$_POST['pw']));
	if($bdd = unserialize(file_get_contents("private/passwd")))
		foreach($bdd as $i => $v)
			if($v['login'] === $user['login'] && $v['passwd'] === $user['pw'])
			{
				unset($bdd[$i]);
				file_put_contents("private/passwd", serialize($bdd));
			}
		}
		header("Location: index.php");
		?>