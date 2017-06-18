<?PHP
function check_cat($categorie)
{
	if (file_exists('private/cat.csv'))
	{
		$cat = unserialize(file_get_contents('private/cat.csv'));
	if ($cat && $categorie != NULL && $categorie != "")
	{
		foreach($cat as $v)
			if ($v['categorie'] == $categorie)
				return (TRUE);
	}
	}
	return (FALSE);
}
?>