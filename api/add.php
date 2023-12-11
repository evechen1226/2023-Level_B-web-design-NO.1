<?php 
include_once "db.php";


switch($table){
    case"admin";
    unset($_POST['pw2']);
    break;
}

$DB=${ucfirst($_POST['table'])};
//假設為 do=?img
//$DB = Img
$table=$_POST['table'];
//$table = img

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

if($table != 'admin'){

    $_POST['sh']=($table=='title')?0:1;

}


unset($_POST['table']);

$DB->save($_POST);

to("../back.php?do=$table");

?>