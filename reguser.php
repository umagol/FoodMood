<?php

include 'DBconnect.php';

$id=$_COOKIE['emailid'];
$name=$_COOKIE['uname'];
$pss=$_COOKIE['pass'];
$_SESSION['uid']=$id;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];

pg_query("insert into user1 values(DEFAULT,'$id','$pss','$name','$firstname','$lastname','$phoneno','$address');");
pg_query("insert into login values('$id','$pss','user')");
header("location:aulogin.php");
?>