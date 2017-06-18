<?php
session_start();
$file = "./private/passwd";
$user = unserialize(file_get_contents($file));
$tab = [];
?>
<?php
foreach ($user as $k => $v)
{
	?>
	<!DOCTYPE html>
<html>
<body style="margin:auto;">
<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
	<tr>
    	<td class="tr_admin">
    		<div class="test">
		    <p>User:<span class="login"> <?php echo $v['login']?></span></p>
		    <form action='delete.php' method='post' style="padding-right: 10px;">
				<input type='hidden' name='username' value="<?php echo $v['login'] ?>"/>
				<input style="margin-top: 25px; font-size: 50px;" type='submit' value='delete'>
		    </form>
		    <br/><br/>
		    <h4></h4>
		    <form action='SaveArticle.php' method='post' style="padding-right: 10px;">
				<input type='hidden' name='username' value="<?php echo $v['login'] ?>"/>
				<input style="margin-top: 25px; font-size: 50px;" type='submit' value='delete'>
		    </form>
		    <br/><br/>>
		    </div>
    	</td>
    </tr>
    </table>
</body>
</html>
    <?php
}
?>