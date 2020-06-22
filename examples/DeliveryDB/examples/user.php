<?php

include "DBconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Food Mood User Profile
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



<!----------------------------------------------------------- Body Tag is start------------------------------------------>


<body class="">
  <div class="wrapper ">
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
          <li class="nav-item active ">
            <a class="nav-link" href="./user.php">
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <p>Map</p>
            </a>
          </li>
        <!--  <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <p>Notifications</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: orange;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo" style="color: black;">User Profile</a>
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
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <img src="not.png" style="width: 20px;height: 20px;"></img>
                  <!--Notifivation Bar-->
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
                <a class="nav-link" href="./user.html" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <img src="profile.png" style="height:20px;width:20px;">
                  <!--Person  image in png format navigation box-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                 <!--<div class="dropdown-divider"></div>-->
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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card" >
                <div class="card-header card-header-azure" style="background-color: black;" >
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-categoryazuree te your profile">you can edit your profile </p>
                </div>
                <div class="card-body">
                  <form method="POST" action="dupdate.php">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bike Number</label>
                          <input name="bikeno" type="text" maxlength="10" class="form-control" value="<?php $data=pg_query("select bikeno from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['bikeno'];
                    ?>" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="dname" class="form-control"  value="<?php $data=pg_query("select dbname from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['dbname'];
                    ?>" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address(Not Changeable)</label>
                          <input name="demailid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php $data=pg_query("select demailid from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['demailid'];
                    ?>" type="email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input name="firstname"  value="<?php $data=pg_query("select firstname from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['firstname'];
                    ?>" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lastname" type="text" class="form-control"  value="<?php $data=pg_query("select lastname from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['lastname'];
                    ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">License No </label>
                          <input name="lno" pattern=".{11,}" maxlength="11" type="text" class="form-control"  value="<?php $data=pg_query("select lno from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['lno'];
                    ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input name="phoneno" pattern=".{10,}" type="text" maxlength="10" class="form-control"  value="<?php $data=pg_query("select phoneno from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['phoneno'];
                    ?>" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Choose Area :  </label>
                         
<select name="area" style="border-color: white;">
  <option name="Kothrud">Kothrud</option>
  <option name="Sadashiv peth">Sadashiv Peth</option>
  <option name="Katraj">Katraj</option>

</select>
                          <input type="text"  class="form-control"  value="<?php $data=pg_query("select area from deliveryboy where demailid='$_SESSION[did]'");
                       $row=pg_fetch_array($data);
                       echo $row['area'];
                    ?>" required>
                        </div>
                      </div>
                      
                    </div>
                   
                    <button type="submit" class="btn btn pull-right" style="background-color: black;">Update Profile</button>
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
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>
