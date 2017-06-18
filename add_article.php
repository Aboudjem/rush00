<?php session_start();

include "check_cat.php";

if ($_POST['name'] != NULL && $_POST['price'] != NULL && $_POST['img'] != NULL && $_POST['stock'] && $_POST['submit'] == "Ajouter")
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
    $book['categorie'] = $_POST['categorie'];
    $book['name'] = $_POST['name'];
    $book['stock'] = $_POST['stock'];
    $book['price'] = $_POST['price'];
    $book['img'] = $_POST['img'];
    $bdd[] = $book;
    file_put_contents("private/bdd.csv", serialize($bdd));
}
?>