<?php
//This is a Delete Account fro a Delivery boy
include 'DBconnect.php';

pg_query("delete from deliveryboy where demailid='$_SESSION[did]';");
pg_query("delete from login where id='$_SESSION[did]';");
session_destroy();
header("Location: ../../../../login.php");

?>