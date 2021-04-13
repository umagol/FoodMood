<?php
include '../DBconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Food Mood</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body align="center" style="background-image: url(FM.png);">

  <?php

if(!(isset($_SESSION['uid'])))
  {
   echo "<script> alert('You Login Is Not Working'); </script>";
   header("Location: ../login.php");
  }
  else
  {
$name=$_POST['satish'];

$data=pg_query("select * from food where foodname='$name'");
$row=pg_fetch_array($data);
$fid=$row['fid'];
$sid=$row['sid'];

$udata=pg_query("select * from user1 where uemailid='$_SESSION[uid]'");
$urow=pg_fetch_array($udata);
$uid=$urow['uid'];
//pg_query("insert into order1 values(DEFAULT,'$fid','$sid','$uid');");


echo "

        <div  class='card mt-4' style='width:70%; float:right;  '>
          <img href='FM.png' class='card-img-top img-fluid'>
          <div class='card-body'>
            <h3 class='card-title'>$row[foodname]</h3>
            <h4>Rs.$row[price]</h4>
            <p class='card-text'>$row[description]</p>
            <form method='POST' action='order.php'>
            <button value='$name' name='fname' class='btn btn-success'>Order</button>
         
        
        <!-- /.card -->

        <div  style='width:50% ;height:50%;float:right;' class='card card-outline-secondary my-4' >
          <div class='card-header'>
            Product Reviews
          </div>
          <div class='card-body'>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class='text-muted'>Posted by Satishumagol on 3/1/17</small>
          
            <hr>
            <a href='' class='btn btn-success'>Post</a>
          </div>
        </div>
      
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
  
    </div>

  </div>"; 
  }

?>
  <!-- /.container -->
</body>
</html>