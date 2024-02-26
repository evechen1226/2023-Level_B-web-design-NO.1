<?php
include_once "db.php";
// ' OR 1=1; ---->舉例
//過濾表單資料，預防SQL注入
// $acc=htmlspecialchars($_POST['acc']);
// $pw=htmlspecialchars($_POST['pw']);

// if($Admin->count(['acc'=>$acc,'pw'=>$pw])>0){
//     $_SESSION['login']=$acc;
//     to("../back.php");
// }else{
//     to("../index.php?do=login&error=帳號密碼錯誤");
// }

// 在db.php增加資料過濾的函式 check()
// if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
//     $_SESSION['login']=$_POST['acc'];
//     to("../back.php");
// }else{
//     to("../index.php?do=login&error=帳號密碼錯誤");
// }

// 使用 md5編碼, 之前使用明碼的資料無法登入
if($Admin->count(['acc'=>$_POST['acc'],'pw'=>md5($_POST['pw'])])>0){
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號密碼錯誤");
}
