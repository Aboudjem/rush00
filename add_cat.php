<?PHP
if ($_POST['cat'] != NULL && $_POST['submit'] == "OK")
{
	if (!file_exists('private/cat.csv'))
		file_put_contents('private/cat.csv', "");
	$cat = unserialize(file_get_contents('private/cat.csv'));
	if ($cat)
	{
		foreach($cat as $k => $v)
		{
			if ($v['name'] == $_POST['cat'])
			{
				echo "Cette categorie existe deja\n";
				exit(0);
			}
		}
	}
	$categorie['name'] = $_POST['cat'];
	$cat[] = $categorie;
	file_put_contents("private/cat.csv", serialize($cat));
}
?>