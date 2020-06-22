<?php
include 'DeliveryDB/examples/DBconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Food Mood seller Dashboard
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
<!-----------------------------------------------------  Body Tag is start------------------------------------------>
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
            <a class="nav-link" href="./listoi.php">
              <p>Add a Food</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./AssignDB.php">
              <p>Assign Delivery Boy</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
   <!--  All Side Bar Is Done Now Now Working on Main Page  -->
    <div class="main-panel" style="background-color:#FF9800;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "  >
        <div class="container-fluid">
          <div class="navbar-wrapper" >
            <a class="navbar-brand" style="color: black;" href="#pablo">List OF Food</a>
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
                  <a class="dropdown-item" style="background-color: #FF9800;" href="#">Food is Delivered</a>
                  <a class="dropdown-item" style="background-color: #FF9800;" href="#">Food is Not Delivered</a>
                  <a class="dropdown-item" style="background-color: #FF9800;" href="#">New Order Is coming</a>
                  <a class="dropdown-item" style="background-color: #FF9800;" href="#">Assign the Delivery Boy</a>
 </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="./user.html" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="profile.png" style="height: 20px;width: 20px;">
            <!--Person  image in png format navigation box-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" style="background-color: #FF9800;" href="sdelacc.php">Delete Account</a>
                  <a class="dropdown-item" style="background-color: #FF9800;" href="changepss.php">change Password</a>
                  <a class="dropdown-item" style="background-color: #FF9800;" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<!-- Page Content -->
<div class="con container" style="background-color: black;">
  <!-- /.col-lg-3 -->
  <div class="col-lg-9" style="height: 1000px ">
<!--Food Section is start-->
<?php
$s=pg_query("select * from seller where semailid='$_SESSION[sid]'");
$srow=pg_fetch_array($s);
$sid=$srow['sid'];
$q=pg_query("select * from food where sid='$sid'");
for($row=0;$row=pg_fetch_array($q);$row++)
{
$foodname=$row['foodname'];  
$_SESSION['foodname']=$foodname;
echo"
 <form action='food/fooddata.php' method='POST'>
    <div class='row' ><!--start the Block-->
      <div class='col-lg-4 col-md-6 mb-4'>
        <div class='card h-100'>
          <a><img class='card-img-top' src='FM.png'></a>
          <div class='card-body'>
            <h4 class='card-title'>
              <a>";
                  // echo 
              //$foodin=$row[foodname];

              echo"  $row[foodname]  "; echo "</a>
            </h4>
            <h5>RS.$row[price]</h5>
            <p class='card-text'>$row[description]</p>
          </div>
          <div class='card-footer'>
            <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
           

            <button value='$row[foodname]' name='foodname'  style='color:white; background-color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; '>Product</button>
</form>
            </a>
          </div>
        </div>
     </div>
      ";}?>
    <!-- /.row -->
  <!-- /.col-lg-9 -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  </body>
</html>