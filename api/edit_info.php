<?php include_once "db.php";

//因為要共用，所以需要增加一input隱藏欄位存入當前網頁名稱
//取得資料表名稱
$table=$_POST['table'];

$DB=${ucfirst($table)};

$data-$DB->find(1);

$data['$table']=$_POST['$table'];


$DB->save($date);


// 1.
// header("location:../back.php?do=total");
// 2.
// to("../back.php?do=total");
// 3.
to("../back.php?do=$table");

?>