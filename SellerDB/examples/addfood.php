<?php
include 'DeliveryDB/examples/DBconnect.php';

$foodname=$_POST['foodname'];
$price=$_POST['price'];
$desicription=$_POST['desicription'];
$discount=$_POST['discount'];
$sid=pg_query("select sid from seller where semailid='$_SESSION[sid]'");
$row=pg_fetch_array($sid);
$sddata=$row['sid'];
$_SESSION['sdid']=$sddata;//SDID Is a Default Sller Id 

$row=pg_fetch_array($sid);
pg_query("insert into food values(DEFAULT,'$foodname','$price','$desicription','$discount','$sddata')");

echo "<html><script> alert('Yor FOOD In ADD Thank you For Adding a Food') </script></html>";
header("Location: dashboard.php");
?>