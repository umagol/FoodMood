<?php

include 'DeliveryDB/examples/DBconnect.php';
$uemailid=$_POST['emailid'];
/*$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
*/
pg_query("update user1 set firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]',name='$_POST[name]',uemailid='$_POST[emailid]',phoneno='$_POST[phoneno]' where uemailid='$_SESSION[uid]';");
$_SESSION['uid']=$uemailid;
header("Location: ../../aulogin.php");

?>