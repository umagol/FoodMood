<?php
//This Code For Update the database for the delivery boy 
include 'DBconnect.php';
$demailid=$_POST['demailid'];
/*$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
*/
pg_query("update deliveryboy set firstname='$_POST[firstname]',lastname='$_POST[lastname]',area='$_POST[area]',bikeno='$_POST[bikeno]',lno='$_POST[lno]',dbname='$_POST[dname]',phoneno='$_POST[phoneno]' where demailid='$_SESSION[did]'");
//$_SESSION['did']=$uemailid;
header("Location: user.php");

?>