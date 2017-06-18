<?PHP
if ($_POST['categorie'] != NULL && $_POST['submit'] == "OK")
{
	if (!file_exists('private/cat.csv'))
		file_put_contents('private/cat.csv', "");
	$cat = unserialize(file_get_contents('private/cat.csv'));
	if ($cat)
	{
		foreach($cat as $k => $v)
		{
			if ($v['categorie'] == $_POST['categorie'])
			{
				echo "Cette categorie existe deja\n";
				exit();
			}
		}
		$categorie['name'] = $_POST['categorie'];
		$cat[] = $categorie;
		file_put_contents("cat.csv", serialize($cat));
	}
}
?>