<?php session_start(); ?>
<?php
    function print_error()
    {
    	$_SESSION["log"] = "ERROR";
    	exit(0);
    }
    if (($_POST['submit']) && ($_POST['categorie']) !== '' && ($_POST['nom']) !== '' && ($_POST['prix']) !== '' && ($_POST['img']) !== '' && ($_POST['stock']) !== '')
    {
    	if (!file_exists("private"))
    		mkdir("private");
    	$article['categorie'] = $_POST['categorie'];
    	$article['nom'] = $_POST['nom'];
    	$article['prix'] = $_POST['prix'];
    	$article['stock'] = $_POST['stock'];
    	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
    	$extension = strrchr($_FILES['avatar']['name'], '.');
    	if(!in_array($extension, $extensions))
        {
             $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
             exit(0);
        }
    	
    	$fichier = basename($_FILES['img']['name']);
    	
    	if (!file_exists("private/articles"))
    		file_put_contents("private/articles", "");	
    	if($bdd = unserialize(file_get_contents("private/articles")))
    		foreach($bdd as $v)
    			if($v['nom'] === $article['nom'])
    				print_error();
    	$bdd[] = $article;
    	file_put_contents("private/articles", serialize($bdd));
    	if(move_uploaded_file($_FILES['img']['tmp_name'], "./ressources" . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload !';
         }
    	header('Location: index.html');
    	echo ("OK\n");
    }
    else
    	print_error();
    header('Location: admin.php');
?>