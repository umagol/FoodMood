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

<body>

  <?php
  $sdata=pg_query("select * from seller where semailid='$_SESSION[sid]'");
$srow=pg_fetch_array($sdata);
//echo $_SESSION['foodname'];
//$foodname=$_COOKIE['foodname'];
$data=pg_query("select * from food where foodname='$_SESSION[foodname]'");
$row=pg_fetch_array($data);
 echo" <!-- Page Content -->

  <div class='container'>

    <div class='row'>

      <div class='col-lg-3'>
        <h1 class='my-4'>$srow[sname]</h1>
         </div>
      <!-- /.col-lg-3 -->

      <div class='col-lg-9>

//while ( ) ";
echo "
        <div class='card mt-4'>
          <img class='card-img-top img-fluid'>
          <div class='card-body'>
            <h3 class='card-title'>$row[foodname]</h3>
            <h4>$row[price]</h4>
            <p class='card-text'>$row[description]</p>
            </div>
        </div>
        <!-- /.card -->

        <div class='card card-outline-secondary my-4'>
          <div class='card-header'>
            Product Reviews
          </div>
          <div class='card-body'>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class='text-muted'>Posted by Anonymous on 3/1/17</small>
          
            <hr>
            <a href='deletefood.php' class='btn btn-success'>Delete Food</a>
          </div>
        </div>
      
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
  
    </div>

  </div>";  ?>
  <!-- /.container -->
</body>
</html>