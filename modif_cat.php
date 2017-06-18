<?PHP
if ($_POST['oldcat'] !== NULL && $_POST['newcat'] !== NULL && 
	$_POST['newcat'] !== "" && $_POST['submit'] === "Modifier"
	&& file_exists('./private/cat.csv'))
{
	if ($cat = unserialize(file_get_contents('./private/cat.csv')))
	{
		foreach($cat as $k => $v)
			if ($v['name'] === $_POST['newcat'])
			{
				header('Location: admin3.php');
				echo 'Categorie deja existante';
				exit();
			}
			if ($v['name'] === $_POST['oldcat'])
				$tmp = $v;
	}
	$cat[$tmp]['name'] = $_POST['newcat'];
	file_put_contents("./private/cat.csv", serialize($cat));
}
header('Location: admin3.php');
?>
