<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login</title>
</head>
<?php include('./ressources/header.php');
$file = "./private/passwd";
$user = unserialize(file_get_contents($file));
$tab = [];
?>

<html>
<body style="margin:auto;">
<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
	<tr>
    	<td class="tr_admin">
    		<div class="test">
		    
		    <form action='add_cat.php' method='post' style="padding-right: 10px;">
                Nom Categorie: <input type="text" name="cat">
				<input style="margin-top: 25px; font-size: 30px;" type='submit' name='submit' value='OK'>
		    </form>
		    </div>
    	</td>
    </tr>
    </table>
   <hr>
</body>
</html>