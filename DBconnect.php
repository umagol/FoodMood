<?php
$c=session_start();
if(!$c)
{
	echo "<script> alert('Your DB is Not Connected') </script>";
}
$con=pg_connect("host=localhost dbname=postgres user=postgres password=satish");
if (!$con) 
{
echo "<script> alert('Your DB is Not Connected') </script>";	
echo "DB is Not Connect";
}
?>