<?PHP
session_start();
if ($_POST['oldcat'] !== NULL && $_POST['newcat'] !== NULL && 
	$_POST['newcat'] !== "" && $_POST['submit'] === "Modifier"
	&& file_exists('./private/cat.csv'))
{
	$cat = unserialize(file_get_contents('./private/cat.csv'));
	{
		foreach($cat as $k => $v)
		{
			if ($v['name'] === $_POST['oldcat'])
				$cat[$k]['name'] = $_POST['newcat'];
			else if ($v['name'] === $_POST['newcat'])
			{
				header('Location: admin.php');
				echo 'Categorie deja existante';
				exit();
			}
		}
	}
	file_put_contents("./private/cat.csv", serialize($cat));
}
header('Location: admin.php');
?>