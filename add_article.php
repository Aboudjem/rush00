<?php
session_start();
print_r($_FILES['img']);
include "check_cat.php";

function check_price($price)
{
    if (is_numeric($price) && $price > 0)
        return (TRUE);
    return (FALSE);
}
function check_name($name)
{
    $name = trim($name);
    if ($name !== NULL && $name !== "")
        return (TRUE);
    return (FALSE);
}
function check_file($file)
{
    if (!$file)
        return(FALSE);
    $extensions = array('.png','.gif','.jpg','.jpeg');
    $extension = strchr($_FILES['img']['name'],'.');
    if(!in_array($extension, $extensions))
        return(FALSE);
    return(TRUE);
}

function upload_file($file)
{
    $tmp_name = $_FILES["img"]["tmp_name"];
    move_uploaded_file($tmp_name, "ressources/" . $file);
}

    $file= basename($_FILES['img']['name']);

    $name = trim($_POST['name']);
    if (($_POST['categorie']) && check_price($_POST['price']) && check_name($_POST['name'])
        && check_file($file) && $_POST['stock'] && $_POST['submit'] === "Ajouter")
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
                echo "Un article du meme nom existe deja\n";
                exit();
            }
        }
    }
    if (upload_file($file))
    $book['img'] = $file;
    $book['categorie'] = $_POST['categorie'];
    $book['name'] = $_POST['name'];
    $book['stock'] = $_POST['stock'];
    $book['price'] = $_POST['price'];
    $bdd[] = $book;
    file_put_contents("private/bdd.csv", serialize($bdd));
}
header('Location: admin.php');
?>