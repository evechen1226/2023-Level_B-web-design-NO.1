<?php 
include_once "db.php";

$DB=${ucfirst($_POST['table'])};
//假設為 do=?img
//$DB = Img
$table=$_POST['table'];
//$table = img

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];

}
$_POST['sh']=($table=='title')?0:1;
unset($_POST['table']);
echo $DB;
$DB->save($_POST);

// to("../back.php?do=$table");

?>