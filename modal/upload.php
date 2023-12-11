<?php
switch ($_GET['tqble']) {
    case 'title';
        echo "<h3>更新網站標題圖片</h3>";
        break;
    case 'mvim';
        echo "<h3>更新動畫圖片</h3>";
        break;
    case 'image';
        echo "<h3>更新校園映像圖片</h3>";
        break;
}
?>

<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <?php
        switch ($_GET['tqble']) {
            case 'title';
                echo " <tr>
        <td>標題區題片</td>
            <td><input type='file' name='img'></td>
        </tr>
        <tr>
        <td>標題區替代文字</td>
        <td><input type='text' name='text'></td>
        </tr>";
                break;
            case 'mvim';
                echo "
                <td>更新動畫圖片</td>
                <td><input type='file' name='img'></td>
            </tr>";
                break;
            case 'image';
                echo "        <td>更新校園映像圖片</td>
                <td><input type='file' name='img'></td>
            </tr>";
                break;
        }
        ?>


    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">

    </div>
</form>