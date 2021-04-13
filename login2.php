<html>
<body>
	<?php
		include 'DBconnect.php';

		$id=$_POST['emailid'];	
		$pass=$_POST['psw'];
		$_SESSION['id']=$id;
		$q=pg_query("select * from login");//this table is seller dilivery boy and user database many to many relationship
		$n=0;
while($row=pg_fetch_array($q))
{
		if($row['id']==$id && $row['password']==$pass && $row['logtype']=="user")
		{
		$n=1;
		}else
		if($row['id']==$id && $row['password']==$pass && $row['logtype']=="seller")
		{
		$n=2;
		}else
			if($row['id']==$id && $row['password']==$pass && $row['logtype']=="deliveryboy")
		{
		$n=3;
		}
}
if($n==1)
{	
echo "user";
			echo "<script>alert(USERNAME or PASSWORD NOT VALID)</script>";

	$_SESSION['uid']=$id;
	setcookie('uid',$id);
		header("location:aulogin.php");//user Login 
		
}	
else
if($n==2)
{
	$_SESSION['sid']=$id;

			echo "<script>alert(USERNAME or PASSWORD NOT VALID)</script>";

		 header("location:SellerDB/examples/dashboard.php");//Seller Login 
}	else
if($n==3)
	//
	    	{
	$_SESSION['did']=$id;

			echo "<script>alert(USERNAME or PASSWORD NOT VALID)</script>";

   		header("location:SellerDB/examples/DeliveryDB/examples/dashboard.php");//deliver boy Login 
	 		}
	
		else
			{
			echo "<script>alert('USERNAME or PASSWORD NOT VALID')</script>";
				header("location:login.php");
				
			}
	
	?>
</body>
</html>