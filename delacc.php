<?php

include 'DBconnect.php';

pg_query("delete from user1 where uemailid='$_SESSION[uid]'");

?>