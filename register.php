<?php session_start(); ?>
<?php
function print_error()
{
	header("Location: index.php");
	exit(0);
}
if (($_POST['submit']) && ($_POST['login']) !== '' && ($_POST['passwd']) !== '')
{
	if (!file_exists("private"))
		mkdir("private");
	$user['login'] = htmlspecialchars($_POST['login']);
	$user['passwd'] = (hash(sha224,$_POST['passwd']));
	if (!file_exists("private/passwd"))
		file_put_contents("private/passwd", "");
	if($bdd = unserialize(file_get_contents("private/passwd")))
		foreach($bdd as $v)
			if($v['login'] === $user['login'])
				print_error();
	$bdd[] = $user;
	file_put_contents("private/passwd", serialize($bdd));
	header('Location: index.php');
	echo ("OK\n");
}
else
	print_error();
?>