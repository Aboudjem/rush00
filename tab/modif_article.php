<?php
include "check_cat.php";
include "add_article.php";

if ($_POST['cat'] != "")
	$cat = check_cat($_POST['cat']);
if ($_POST['price'] !== "")
	$price += check_price($_POST['price']);
if ($_POST['stock'] != "")
	if((!is_numeric($_POST['stock'])) && $_POST['stock'] <= 0)
		$stock = 1;
	$name =  check_name($_POST['name']);
	$file = basename($_FILES['img']['name']);
	if ($file)
		$file_test = check_file($file);
	if (($cat + $price + $stock + $name + $file_test) === 0
		&& $_POST['submit'] == "Modifier")
	{
		if (!file_exists('private/bdd.csv'))
			file_put_contents('private/bdd.csv', "");
		$bdd = unserialize(file_get_contents('private/bdd.csv'));
		if ($bdd)
		{
			foreach($bdd as $k => $v)
			{
				if ($v['name'] == $_POST['name'])
				{
					if ($cat)
						$bdd[$k]['cat'] = $_POST['cat'];
					if ($name)
						$bdd[$k]['name'] = $_POST['name'];
					if ($stock)
						$bdd[$k]['stock'] = $_POST['stock'];
					if ($price)
						$bdd[$k]['price'] = $_POST['price'];
					if ($file_test)
						$bdd[$k]['img'] = $_POST['img'];
				}
			}
		}
		file_put_contents("private/bdd.csv", serialize($bdd));
	}
?>