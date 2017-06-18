<?php
session_start();
// include "check_cat.php";
// include "add_article.php";

// if ($_POST['cat'] != "")
	// $cat = check_cat($_POST['cat']);
function check_price($price)
{
    if (is_numeric($price) && $price > 0)
        return (1);
    return (0);
}
function check_name($name)
{
    $name = trim($name);
    if ($name !== NULL && $name !== "")
        return (1);
    return (0);
}
function check_file($file)
{
    if (!$file)
        return(0);
    $extensions = array('.png','.gif','.jpg','.jpeg');
    $extension = strchr($_FILES['img']['name'],'.');
    if(!in_array($extension, $extensions))
        return(0);
    return(1);
}

function upload_file($file)
{
    $tmp_name = $_FILES["img"]["tmp_name"];
    move_uploaded_file($tmp_name, "ressources/" . $file);
}

$price = 0;
$stock = 0;
$price = 0;
$name = 0;
$cat = 1;
echo $_POST['cat'];
if ($_POST['price'] !== "")
	$price += check_price($_POST['price']);
if ($_POST['stock'] !== "")
	if((!is_numeric($_POST['stock'])) && $_POST['stock'] <= 0){
		$stock = 1;
	}
	$name =  check_name($_POST['name']);
	$file = basename($_FILES['img']['name']);
	if ($file)
		$file_test = check_file($file);
	if ($_POST['submit'] == "Modifier")
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
					{
						upload_file($file);
						$bdd[$k]['img'] = $file;
					}
				}
			}
		}
		file_put_contents("private/bdd.csv", serialize($bdd));
	}
?>