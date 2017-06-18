<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Login</title>
</head>
<?php 
include('./ressources/header.php');
$file = "./private/passwd";
$user = unserialize(file_get_contents($file));
$cat = unserialize(file_get_contents("private/cat.csv"));
foreach ($user as $k => $v)
{
    ?>
<html>
<body>
<table border="1px">
    <tr>
        <td class="tr_admin">
            <div class="test">
                <p class="txt">User:<span class="login"> <?php echo $v['login']?></span></p>
                <form action='delete_user.php' method='post' style="padding-right: 10px;">
                    <input type='hidden' name='username' value="<?php echo $v['login'] ?>"/>
                    <input style="margin-top: 25px; font-size: 20px;" type='submit' value='delete'>
                </form>
            </div>
        </td>
    </tr>
</table>
<?php
}
?>
<hr>
<table border="1px">
	<tr>
    	<td style="text-align: center;">
    		<div class="cate">
                <form action='add_cat.php' method='post' style="padding-right: 10px;">
                    <span class="name_cat">Ajout Categorie </span>
                    <input style="width: 300px;" type="text" name="cat">
				    <input style="margin-top: 25px; font-size: 20px;" type='submit' name='submit' value='OK'>
                </form>
		    </div>
    	</td>
    </tr>
</table>
<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
    <tr>
        <td>
            <div class="cate">
                <form action='del_cat.php' method='post' style="padding-right: 10px;">
                    <span class="name_cat">Supprimer la categorie</span>
                    <SELECT style="font-size: 20px; margin-left: 20px; margin-top: 10px; width: 100px;" name= 'cat' size="1">
                        <?PHP foreach ($cat as $k => $v)
                        echo '<OPTION>'.$cat[$k]['name']; ?>
                    </SELECT>
                    <input style="margin-top: 25px; font-size: 20px;" type='submit' name='submit' value='Supprimer'>
                </form>
            </div>
        </td>
    </tr>
    </table>
<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
    <tr>
        <td style="text-align: center;">
            <form action='modif_cat.php' method='post' style="padding-right: 10px;">
                <span class="name_cat">Modifier la categorie</span>
        </td>
        <td>
                <SELECT style="font-size: 20px; margin-left: 240px; width: 150px;" name= 'oldcat' size="1">
                    <?PHP foreach ($cat as $k => $v)
                    echo '<OPTION>'.$cat[$k]['name']; ?>
                    </SELECT>
        </td>
    </tr>
    <tr>                    
        <td style="text-align: center;"">
                <span style="text-align: start;" class="name_cat">Nom modifie:</span>
        </td>
        <td>
                <input style="width: 390px; height: 30px;" type="text" name="newcat">
        </td>
            </form>
    </tr>
    </table>

            <input style="margin-top: 25px; font-size: 30px; display: flex;" type='submit' name='submit' value='Modifier'>    
<hr>
<table border="1px">
    <tr>
        <td style="height: 50px">
            <span style="padding-right: 4px;" class="name_cat">Categorie:</span>
        </td>
        <td>
            <SELECT style="font-size: 20px; margin-left: 240px; width: 150px;" name='categorie' size="1">
            <?php foreach ($cat as $k => $v) 
            echo '<OPTION>'.$cat[$k]['name']; ?>
            </SELECT>  
        </td>
            <form style="display: flex; flex-direction: column;" action='add_article.php' method='post' style="padding-right: 10px;">
    </tr>
    <tr>
        <td>
            <span class="name_cat">Nom: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type='text' name='name'/>
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Prix: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type='text' name='price' />
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Stock: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type='text' name='stock' />
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Img: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type='text' name='img' />
        </td>
    </tr>
    </form>
</table>
            <input style="margin-top: 25px; font-size: 30px; display: flex;" type='submit' name='submvalue='Ajouter'>
</body>
</html>