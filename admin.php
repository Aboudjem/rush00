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
?>
<?php
foreach ($user as $k => $v)
{
	?>
<html>
<body style="margin:0;">
<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
	<tr>
    	<td>
    		<div class="test">
		    <p>User:<span class="login"> <?php echo $v['login']?></span></p>
		    <form action='delete_user.php' method='post' style="padding-right: 10px;">
				<input type='hidden' name='username' value="<?php echo $v['login'] ?>"/>
				<input style="margin-top: 25px; font-size: 30px;" type='submit' value='delete'>
		    </form>
		    </div>
    	</td>
    </tr>
    </table>
    <?php
}
?>
    <hr>
</body>
</html>