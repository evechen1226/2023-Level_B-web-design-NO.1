<?php include_once "db.php";

$bottom=$Bottom->find(1);
$bottom['bottom']=$_POST['bottom'];
$Bottom->save($bottom);
// header("location:../back.php?do=bottom");
to("../back.php?do=bottom");

?>