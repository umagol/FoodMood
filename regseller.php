<?php

include 'DBconnect.php';

$id=$_COOKIE['emailid'];
$name=$_COOKIE['uname'];
$pss=$_COOKIE['pass'];
$_SESSION['sid']=$id;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$adharno=$_POST['Adhrno'];
$phoneno=$_POST['phoneno'];
$panno=$_POST['panno'];
$address=$_POST['address'];
$area=$_POST['area'];
pg_query("insert into seller values(DEFAULT,'$id','$name','$pss','$firstname','$lastname','$adharno','$phoneno','$panno','$address','$area');");
pg_query("insert into login values('$id','$pss','seller')");
header("location:SellerDB/examples/dashboard.php");
?>