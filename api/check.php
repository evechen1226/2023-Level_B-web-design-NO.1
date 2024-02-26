<?php
include_once "db.php";
// ' OR 1=1; ---->舉例
//過濾表單資料，預防SQL注入
$acc=htmlspecialchars($_POST['acc']);
$pw=htmlspecialchars($_POST['pw']);

if($Admin->count(['acc'=>$acc,'pw'=>$pw])>0){
    $_SESSION['login']=$acc;
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號密碼錯誤");
}

