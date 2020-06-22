<?php
include 'DeliveryDB/examples/DBconnect.php';
$name=$_POST['adb'];


$se=pg_query("select * from seller where semailid='$_SESSION[sid]';");
$rowse=pg_fetch_array($se);
$sid=$rowse['sid'];

//Order Is show
 $db=pg_query("select * from order1 where sid='$sid';");
$rowdb=pg_fetch_array($db);
$oid=$rowdb['orid'];




$se=pg_query("select * from deliveryboy where dbid='$name';");
$rowse=pg_fetch_array($se);

pg_query("update order1 set dbid='$name' where orid='$oid';");

echo"<script> alert('Delivery Boy is Assign '); </script>";

header("Location: dashboard.php");

?>
