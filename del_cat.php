<?PHP
if ($_POST['cat'] !== NULL && $_POST['submit'] === "Supprimer")
{
	if (file_exists('./private/cat.csv'))
		$cat = unserialize(file_get_contents('private/cat.csv'));
	if ($cat)
	{
		foreach($cat as $k => $v)
			if ($v['name'] === $_POST['cat'])
				unset($cat[$k]);
		file_put_contents("private/cat.csv", serialize($cat));
	}
}
header('Location: admin.php');
?>
