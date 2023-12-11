<?php include_once "db.php";

$table = $_POST['table'];
// $DB=${ucfirst($_POST['table'])};
$DB = ${ucfirst($table)};
unset($_POST['table']);

//如果沒有$_POST['text']
if(isset($_POST['id'])){
    foreach($_POST['id'] as $id){
        $_POST['text'][$id]='';
    }
}

foreach($_POST['text'] as $id => $text){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }else{

        //有問題??
        $row=$DB->find($id);
        
        if(isset($row['text'])){
            $row['text']=$text;
        }

        if($table=='title'){
            $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
        }else{
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }

        $DB->save($row);
    }
}

to("../back.php?do=$table");