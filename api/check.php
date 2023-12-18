<?php
include_once "db.php";
$acc = $_POST['acc'];
$pwd =$_POST['pw'];

// 使用 count()，節省流量，避免個人資料在傳輸的過程式外流。
if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號密碼錯誤");
}

