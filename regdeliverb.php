<?php

include 'DBconnect.php';

$id=$_COOKIE['emailid'];
$name=$_COOKIE['uname'];
$pss=$_COOKIE['pass'];
$_SESSION['did']=$id;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$lno=$_POST['lno'];
$phoneno=$_POST['phoneno'];
$bikeno=$_POST['bikeno'];
$area=$_POST['area'];
pg_query("insert into deliveryboy values(DEFAULT,'$id','$name','$pss','$firstname','$lastname','$lno','$phoneno','$bikeno','$area');");
pg_query("insert into login values('$id','$pss','deliveryboy');");
header("location:SellerDB/examples/DeliveryDB/examples/dashboard.php");

?>