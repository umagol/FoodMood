<?php
start_session();
//this page is Sign up page this this not a ragistration page so this its data store=d in only cookies format
?>
<html>
<body>
<?php
pg_connect("host=localhost dbname=log") or die("i connot connect");


/* 
pg_query("create table registration(firstname varchar(10),lastname varchar(10),address varchar(20),pin int,mobilenumber int,gender varchar(20),emailid varchar(20),password varchar(10),confirmpassword varchar(10))");

echo"table creates successfuly";
pg_query("create table logt(name varchar(15),password varchar(10))");
echo"table creates successfuly";
*/ 

$_SESSION['']=

$n1=$_REQUEST["fn"];
$n2=$_REQUEST["ln"];
$addr=$_REQUEST["address"];
$mob=$_REQUEST["mn"];
$pi=$_REQUEST["pin"];
$g=$_REQUEST["gender"];
$e=$_REQUEST["email"];
$p=$_REQUEST["pass"];
$cp=$_REQUEST["cpass"];

if($pass["pass"]==$pass["password"])
		{
		$n=1;
		}
else {
	
	echo "<script>alert('PASSWORD NOT VALID')</script>";
}
if($n1=="" || $n2=="" || $addr=="" || $pi=="" || $$cp=="")

{
echo"<script>alert('fill all the fields')</script>";
}
else
{

$check=explode('@',$e);
if(count($check)!=20{
echo"<script>alert('wrong enailid')</script>";
echo"<a href=registration.html>REGISTER ONCE AGAIN </a>";
}
else{
$c=0;
$q=pg_query("select * from logt");
while($row=pg_fetch_array($q))
{
if($row['name']==$e)
{
echo"<script>alert('ID already exists')<script>";
$c=1;
}
}
if($c==0)
{
	pg_query("insert into registration values('$n1','$n2','$addr','$p','$mob','$g','$e','$p','$cp')");
	pg_query("insert into logt vlaues('$e','$cp')");
	echo "<h3>REGISTRATION CONFIRMED </h3><br>";
	echo "<a href=login.html>You can <b>LOGIN </b> Now.....</a>";
	}
	}
	}
	?>
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
