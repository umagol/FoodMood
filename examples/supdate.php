<?php

include 'DeliveryDB/examples/DBconnect.php';
$uemailid=$_POST['emailid'];
/*$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
*/
pg_query("update seller set firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]',sname='$_POST[sname]',phoneno='$_POST[phoneno]',adhrno='$_POST[adhrno]',panno='$_POST[panno]'
 where semailid='$_SESSION[sid]';");
/*
,phoneno='$_POST[phoneno]',adhrno='$_POST[adhrno]',panno='$_POST[panno]'

pg_query("update seller set firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]',name='$_POST[name]',uemailid='$_POST[emailid]',phoneno='$_POST[phoneno]' where semailid='$_SESSION[sid]';");
$_SESSION['sid']=$semailid;
*/
#$_SESSION['sid']=$semailid;
header("Location: dashboard.php");

?>