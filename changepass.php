<?php
include 'DBconnect.php';

$pass=$_POST['pass'];
$repass=$_POST['repass'];
$pno=$_COOKIE['pno'];
$eid=$_COOKIE['eid'];
$uname=$_COOKIE['uname'];
if($pass==$repass){
//echo "<h1>satish umago is  good</h1>";
$q=pg_query("select * from login");
while($row=pg_fetch_array($q))
{
        if($row['id']==$eid && $row['logtype']=="user")
        {
        $user=pg_query("select * from user1");
        while ($us=pg_fetch_array($user))
             {
            $email=$us['uemailid'];
             $phoneno=$us['name'];
               $username=$us['phoneno'];
                  //echo $email;
                  if ($email=="umagol97@gmail.com") //&& $phoneno==$_COOKIE['pno']) //&&  $username==$uname)
                  {
echo $phoneno;
echo "<h1>satish umago is  good</h1>";
                      pg_query("update user1 set password='$pass';");
                  }
             }
        }
        /*else
            if($row['id']==$id && $row['password']==$pass && $row['logtype']=="seller")
        {
        $n=2;
        }else
            if($row['id']==$id && $row['password']==$pass && $row['logtype']=="deliveryboy")
        {
        $n=3;
        }
}
}
else
{
    echo "<script> alert('You Password Is Incorrect') </script>";
    header("Location: ../../aulogin.php");
}*/}}
?>