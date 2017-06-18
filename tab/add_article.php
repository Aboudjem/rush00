<?php
echo '<table border="1px">
    <form style="display: flex; flex-direction: column;" action="add_article.php" method="post" style="padding-right: 10px;"  enctype="multipart/form-data">
<tr>
    <td style="height: 50px">
        <span style="padding-right: 4px;" class="name_cat">Categorie:</span>
    </td>
    <td>
        <SELECT style="font-size: 20px; margin-left: 240px; width: 150px;" name="categorie" size="1">';
        ?>
            <?php foreach ($cat as $k => $v) 
            echo "<OPTION>".$cat[$k]["name"]; ?>
            <?php
            echo '</SELECT>  
    </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Nom: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type="text" name="name"/>
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Prix: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type="text" name="price" />
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Stock: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type="text" name="stock" />
        </td>
    </tr>
    <tr>
        <td>
            <span class="name_cat">Img: </span>
        </td>
        <td>
            <input style="width: 390px; height: 30px;" type="file" name="img" />
        </td>
    </tr>

</table>
<input style="margin-top: 25px; font-size: 30px; display: flex;" type="submit" name="submit" value="Ajouter">
</form>';
?>