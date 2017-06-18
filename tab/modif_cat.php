<?php
if (file_exists("./private/cat.csv"))
    $cat = unserialize(file_get_contents('./private/cat.csv'));

echo '<table style="background-color: rgb(35,35,35);" width="70%" class="text" border="1px">
<tr>
    <td style="text-align: center;">
        <form action="modif_cat.php" method="post" style="padding-right: 10px;">
            <span class="name_cat">Modifier la categorie</span>
        </td>
        <td>
            <SELECT style="font-size: 20px; margin-left: 240px; width: 150px;" name= "oldcat" size="1">';?>
                <?PHP foreach ($cat as $k => $v)
                echo "<OPTION>".$v['name']; ?>
                <?php
                echo '</SELECT>
            </td>
        </tr>
        <tr>                    
            <td style="text-align: center;"">
                <span style="text-align: start;" class="name_cat">Nom modifie:</span>
            </td>
            <td>
                <input style="width: 390px; height: 30px;" type="text" name="newcat">
            </td>
        </tr>
    </table>

    <input style="margin-top: 25px; font-size: 30px; display: flex;" type="submit" name="submit" value="Modifier">    
</form>';
?>