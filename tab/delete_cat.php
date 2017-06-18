<?php
echo '<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
    <tr>
        <td>
            <div class="cate">
                <form action="del_cat.php" method="post" style="padding-right: 10px;">
                    <span class="name_cat">Supprimer la categorie</span>
                    <SELECT style="font-size: 20px; margin-left: 20px; margin-top: 10px; width: 100px;" name= "cat" size="1">';?>
                        <?PHP foreach ($cat as $k => $v)
                        echo "<OPTION>".$cat[$k]["name"]; ?>
                        <?php echo '</SELECT>
                    <input style="margin-top: 25px; font-size: 20px;" type="submit" name="submit" value="Supprimer">
                </form>
            </div>
        </td>
    </tr>
    </table>';
?>