<?php

include 'DeliveryDB/examples/DBconnect.php';

pg_query("delete from seller where semailid='$_SESSION[sid]'");

pg_query("delete from login where id='$_SESSION[sid]'");

header("Location: ../../login.php");
?>