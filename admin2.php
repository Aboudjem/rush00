<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login</title>
</head>
<?php include('./ressources/header.php');
$cat = unserialize(file_get_contents("private/cat.csv"));
?>

<html>
<body style="margin:auto;">
    <table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
       <tr>
           <td class="tr_admin">
              <div class="test">

                  <form action='add_article.php' method='post' style="padding-right: 10px;">
                    Categorie<SELECT name='categorie' size="1">
                    <?php foreach ($cat as $k => $v) 
                    echo '<OPTION>'.$cat[$k]['name']; ?>
                </SELECT>
                <br>
                Nom<input type='text' name='name'/>
                Prix<input type='text' name='price' />
                Stock<input type='text' name='stock' />
                Img<input type='text' name='img' />
                <input style="margin-top: 25px; font-size: 30px;" type='submit' name='submit' value='Ajouter'>
            </form>
        </div>
    </td>
</tr>
</table>
<hr>
</body>
</html>