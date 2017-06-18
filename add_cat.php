<?PHP
if ($_POST['cat'] !== NULL  && !empty(trim($_POST['cat'])) && $_POST['cat'] !== "" && $_POST['submit'] == "Ajouter")
{
	if (!file_exists('./private/cat.csv'))
		file_put_contents('./private/cat.csv', "");
	$cat = unserialize(file_get_contents('./private/cat.csv'));
	if ($cat)
	{
		foreach($cat as $k => $v)
		{
			if ($v['name'] == $_POST['cat'])
			{
				header('Location: admin3.php');
				echo "Cette categorie existe deja\n";
				exit(0);
			}
		}
	}
	$categorie['name'] = $_POST['cat'];
	$cat[] = $categorie;
	file_put_contents("./private/cat.csv", serialize($cat));
}
header('Location: admin3.php');
?>
