<?php
if ($_POST['name'] != NULL && !empty(trim($_POST['name'])) && $_POST['submit'] == "Supprimer")
{
	if (!file_exists('./private/bdd.csv'))
	{
		header('Location: admin.php');
		exit();
	}
	$bdd = unserialize(file_get_contents('./private/bdd.csv'));
	if ($bdd)
	{
		foreach($bdd as $k => $v)
		{
			if ($v['name'] == $_POST['name'])
			{
				unset($bdd[$k]);
				file_put_contents("./private/bdd.csv", serialize($bdd));
			}
		}
	}
}
// header('Location: admin.php');
?>
