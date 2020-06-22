<html><body>
<?php
session_start();
pg_connect("host=localhost dbname=log") or die("i cannot connect");


$id=$_REQUEST["uname"];
$oldpass=$_REQUEST["oldp"];
$newpass=$_REQUEST["newp"];
$cpass=$_REQUEST["confp"];


if(($id=="" && $oldpass=="")&&($newpass=="" && $cpass==""))
{
echo"<script>alert('fill all the field')</script>";
}
else
{
$q=pg_query("select * from logt");
$n=0;
while($row["name"]==$id && $row["password"]==$oldpass)
{ $n=1; }
}
if($cpass==$newpass)
{
if($n==1)
{
pg_query("update logt set password='$cpass' where name='$id'");


pg_query("update registration set password='$cpass' where emailid='$id'");


pg_query("update registration set confirmpassword='$cpass' where emailid='$id'");

	echo"<h3>Heloo</h3><h2>".$SESSION['nme']. "</h2><h4>PASSWORD CHANGED SUCCESSFULLY.....</h4>"
	echo"Your new Password is:<br>";
	
	$q1=pg_query("select * from logt where name='$id'");
	echo ("<table border=2><tr><th>user id </th><th>password </th></tr>");
	
	while($row=pg_fetch_array($q1))
	{
	echo "<tr><td>".$row["name"]."</td>";
	echo "<td>" .$row["password"]."</td></tr>";
	}
	
	echo"</table><br>";
	}
	echo "wrong user id or password ";
	echo "<a href=login.html>NEXT</a>";
	}
	}
	else
		{
		echo "<script>alert('NEW password DONOT MATCH with CONFIRM Password.')</script>";
		echo"<a href=login.html>BACK TO LOGIN PAGE</a> ";
		}
		}
		?>
		</body>
		</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	



















