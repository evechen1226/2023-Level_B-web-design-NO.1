<?php include_once "db.php";
$_POST['total'];
$total=$Total->find(1);
$total->save($total);
// header("location:../back.php?do=total");
to("../back.php?do=total");

?>