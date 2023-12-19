<?php include_once "db.php";

//因為要共用，所以需要增加一input隱藏欄位存入當前網頁名稱

//取得資料表名稱
$table=$_POST['table'];//$table=bottom

//將資料表名稱轉成首字大寫的資料物件變數
$DB=${ucfirst($table)};//$DB=$Bottom
//$DB=$Table

//取得id為1的資料
$data=$DB->find(1);


//將資料中對應的欄位修改為POST過來值
$data['bottom']=$_POST['bottom'];

//使用save更新至資料表
$DB->save($data);


// 1.
// header("location:../back.php?do=total");
// 2.
// to("../back.php?do=total");
// 3.
to("../back.php?do=$table");

?>