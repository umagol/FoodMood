<?php
include "DBconnect.php";
//$emailid=$_COOKIE['emailid'];
//$uname=$_COOKIE['uname'];
//$pass=$_COOKIE['pass'];
/*$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$lno=$_POST['lno'];
$phoneno=$_POST['phoneno'];
$bikeno=$_POST['bikeno'];
$area=$_POST['area'];
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Food Mood Delivery Boy
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />  
  <!--     Fonts and icons   store in font file in this folder example   -->
  <link rel="stylesheet" type="text/css" href="font/googlefont.css" />
  <link rel="stylesheet" href="font/font1.css">
  

  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <style>
  .con
  {
    margin-top: 100px;

  }
  </style>
</head>
<!---------------  Body Tag is start -------------------------->
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="./user.html" class="simple-text ">
     Food Mood
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
             
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.php">
             
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <p>Map</p>
            </a>
          </li>
         <!-- <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <p>Notifications</p>
            </a>
          </li>
-->
        </ul>
      </div>
    </div>

                <!--  All Side Bar Is Done Now Now Working on Main Page  -->



    <div class="main-panel" style="background-color: orange;height:100%">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "  >
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">List Of Order</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>



          <div class="collapse navbar-collapse justify-content-end" >
           
            <ul class="navbar-nav">
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="not.png" style="width: 20px;height: 20px;"></img> <!--Notifivation Bar-->
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" style="background-color: orange;" href="#">Food is Delivered</a>
                  <a class="dropdown-item" style="background-color: orange;" href="#">Food is Not Delivered</a>
                  <a class="dropdown-item" style="background-color: orange;" href="#">New Order Is comming</a>
                  <a class="dropdown-item" style="background-color: orange;" href="#">Assign the Delivery Boy</a>
                  <a class="dropdown-item" style="background-color: orange;" href="#">Update Data Fro new Items</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="./user.html" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="profile.png" style="height: 20px;width: 20px;"><!--Person  image in png format navigation box-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" style="background-color: orange;" href="delacc.php">Delete Account</a>
                  <a class="dropdown-item" style="background-color: orange;" href="../../../../drepass.php">change Password</a>
                  <a class="dropdown-item" style="background-color: orange;" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
<!-- Page Content -->
<div class="con container">
  <!-- /.col-lg-3 -->

<!-- PHP Code Is Start -->
<?php

$db=pg_query("select * from deliveryboy where demailid='$_SESSION[did]';");
$rowse=pg_fetch_array($db);
$did=$rowse['dbid'];


//order table
 $o=pg_query("select * from order1 where dbid='$did';");
$rowo=pg_fetch_array($o);
if(!$rowo)
{
  echo "You Don't Have Any Order";
}
else
{
$se=pg_query("select * from seller where sid='$rowo[sid]';");
$rowse=pg_fetch_array($se);
//  $sid=$rowse['sid'];

//Food table
 $fd=pg_query("select * from food where fid='$rowo[foodid]';");
$fdo=pg_fetch_array($fd);
$fid=$fdo['fid'];


//user is table
 $u=pg_query("select * from user1 where uid='$rowo[uid]';");
$udo=pg_fetch_array($u);




echo"
<table class='table' border='1px' style='border-color: black;''>
  <thead>
    <tr style='color: black;'>
      <th scope='col'>Food Name</th>
      <th scope='col'>Price </th>  
      <th scope='col'> Seller Address  </th>
      <th scope='col'>User Address</th>
      <th scope='col'>Seller phone No</th>
      <th scope='col'>User phone No</th>
      <th scope='col'>Delivery Opt.</th>
      

    </tr>
  </thead>
  <tbody >
    <tr style='border-color: black;' >
      <th scope='row' > $fdo[foodname] </th>
      <td>Rs.$fdo[price] </td>
      <td>$rowse[address]</td>
      <td>$udo[address]</td>
      <td>$rowse[phoneno]</td>
      <td>$udo[phoneno]</td>
      <th scope='col'><form action='gotodeliverd.php' method='POST'><button style='background-color: orange;border-radius: 10px;border-color: black'>Go To Order</button></form></th>
    </tr>
    
  </tbody>
</table>
";
} ?>
</div>
<!-- /.container -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  </body>

</html>