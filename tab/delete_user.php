<?php echo '<html>
<body>
<table border="1px">
    <tr>
        <td class="tr_admin">
            <div class="test">
                <p class="txt">User:<span class="login"> <?php echo $v["login"]?></span></p>
                <form action="delete_user.php" method="post" style="padding-right: 10px;">
                    <input type="hidden" name="username" value="<?php echo $v["login"] ?>
                    <input style="margin-top: 25px; font-size: 20px;" type="submit" value="delete">
                </form>
            </div>
        </td>
    </tr>
</table>';
?>