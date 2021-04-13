<?php
//This is a Delete Account fro a User
include 'DeliveryDB/examples/DBconnect.php';

pg_query("delete from user1 where uemailid='$_SESSION[uid]';");

pg_query("delete from login where id='$_SESSION[uid]';");
session_destroy();
header("Location: ../../login.php");

?>