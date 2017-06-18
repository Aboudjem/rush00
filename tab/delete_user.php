<?php
$user = unserialize(file_get_contents("./private/passwd"));
 echo '<html>
<body>
<table border="1px">
    <tr>
        <td class="tr_admin">';
            foreach ($user as $key => $v) {

            
              echo '<div class="test"><p class="txt">User:<span class="login">';
                echo $v["login"];
                echo '</span></p>
                <form action="delete_user.php" method="post" style="padding-right: 10px;">
                    <input type="hidden" name="username" value="';
                    echo $v["login"];
                    echo'"><input style="margin-top: 25px; font-size: 20px;" type="submit" value="delete">
                </form></div>';
            }
            echo '</td>
    </tr>
</table>';
?>