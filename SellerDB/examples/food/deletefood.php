<?php
include '../DeliveryDB/examples/DBconnect.php';
$foodname=$_POST['foodname'];
pg_query("delete from food where foodname='$foodname'");

header("Location: ../dashboard.php");

?>

