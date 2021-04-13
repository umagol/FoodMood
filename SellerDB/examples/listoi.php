<?php
//This File For Add Food In DB
include 'DeliveryDB/examples/DBconnect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Food Mood Add a Items
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="font/googlefont.css" />
  <link rel="stylesheet" href="font/font1.css">

  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<!---------- Body Tag is start----------------------->



<body class="" >
  <div class="wrapper" >
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

      <div class="logo">
        <a class="simple-text logo-normal">
        Food Mood
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.php">
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.php">
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./listoi.php">
              <p>Add a food</p>
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
    <div class="main-panel"  style="background-color: orange;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="background-color: orange;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Add a Food</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          
            <ul class="navbar-nav">
                
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="profile.png" style="width: 20px;height: 20px;"></img>
                    <!--Person-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                   <a class="dropdown-item" style="background-color: orange;" href="sdelacc.php">Delete Account</a>
                  <a class="dropdown-item" style="background-color: orange;" href="changepss.php">change Password</a>
                  <a class="dropdown-item" style="background-color: orange;" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
     
<div class="content" style="background-color: orange;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-azuru" style="background-color: black;">
            <h4 class="card-title">Add a Food </h4>
            <p class="card-category">Please Enter Details About Your Food....</p>
          </div>
          <div class="card-body">
            <form action="addfood.php" method="POST">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black;">Name Of Food </label>
                    <input type="text" name="foodname" class="form-control" placeholder="Enter The Name Of Food ">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black;">Price</label>
                    <input type="number" pattern=".{2,}" name="price" class="form-control" placeholder="Price Of Food (Ex. Rs.99)">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black;">Any Discount
                    </label>
                    <input maxlength="2" placeholder="Do You Want To Give Any Discount (Ex.29%)" name="discount" type="number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label style="color: black;"s>Description</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> </label>
                      <textarea class="form-control" rows="5" placeholder="Explain Detail About Your Food" name="desicription"></textarea>
                    </div>
                  </div>
                </div>
                <label style="color: black;">  Upload image   :- </label><br>
                <input type="file" class="btn "  style="background-color:black">
              </div>
              <button type="submit" class="btn " style="background-color: black;float:right;">Add a Food</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script><script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>