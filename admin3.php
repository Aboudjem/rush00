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
    	<td class="tr_admin">
    		<div class="cate">
                <form action='add_cat.php' method='post' style="padding-right: 10px;">
                    <span class="name_cat">Nom Categorie </span><input type="text" name="cat">
				    <input style="margin-top: 25px; font-size: 20px;" type='submit' name='submit' value='OK'>
                </form>
		    </div>
    	</td>
    </tr>
</table>
<hr>
<table border="1px">
    <tr>
        <td style="height: 50px">
            <span class="name_cat">Categorie</span>
                <SELECT style="font-size: 15px; margin-left: 300px;" name='categorie' size="1">
                    <?php foreach ($cat as $k => $v) 
                    echo '<OPTION>'.$cat[$k]['name']; ?>
            </SELECT>        
        </td>
                <form style="display: flex; flex-direction: column;" action='add_article.php' method='post' style="padding-right: 10px;">
    </tr>
    <tr>
        <td>
            <div class="cat_div" style="">
                <span class="name_cat">Nom:</span><input class="input" type='text' name='name'/>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="cat_div">
                <span class="name_cat">Prix:</span><input class="input" type='text' name='price' />
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="cat_div">
                <span class="name_cat">Stock:</span><input class="input" type='text' name='stock' />
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="cat_div">
                <span class="name_cat">Img:</span><input class="input" type='text' name='img' />
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <input style="margin-top: 25px; font-size: 30px; display: flex;" type='submit' name='submvalue='Ajouter'>
        </td>
    </tr>
    </form>
</table>
</body>
</html>