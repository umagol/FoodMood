<html>
<body>
<?php
include 'DBconnect.php';
$id=$_POST["uname"];
//$_SESSION['nme']=$_REQUEST["uname"];
$pass=$_POST["pass"];
$q=pg_query("select * from logt");//this table is seller dilivery boy and user database many to many relationship
$n=0;
while($row=pg_fetch_array($q))
	{
		if($row["name"]==$id && $row["password"]==$pass)
		{
		$n=1;
		}
	}
	    if($n==1)
	{
		if(pg_query("select * from logt where type='user'"))
	{
		echo "<h1> Hi satish  </h1>";
			header("localhost:aulogin.php");//user Login 
	}
	else
		if (pg_query("select * from logt where type='seller'"))
	 {
		 header("localhost:SellerDB\examples\dashboard.html");//Seller Login 
	 }	
	else 
		if (pg_query("select * from logt where type='deliveryboy'"))
	 {
	   	header("localhost:\SellerDB\examples\DeliveryDB\examples\dashboard.html");//deliver boy Login 
	 }
	}
	else
	{
	echo "<script>alert('USERNAME or PASSWORD NOT VALID')</script>";
	// header("Location:userreg.html");
	}
	?>
	</body>
	</html>