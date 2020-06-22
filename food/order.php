<?php
include '../DBconnect.php';
$fname=$_POST['fname'];

$data=pg_query("select * from food where foodname='$fname'");
$row=pg_fetch_array($data);
$fid=$row['fid'];
$sid=$row['sid'];

$udata=pg_query("select * from user1 where uemailid='$_SESSION[uid]'");
$urow=pg_fetch_array($udata);
$uid=$urow['uid'];
pg_query("insert into order1 values(DEFAULT,'$fid','$sid','$uid');");
//echo "<script> alert(' Thank you For Ordering Food '); </script>";
//header("Location: ../aulogin.php");

?>