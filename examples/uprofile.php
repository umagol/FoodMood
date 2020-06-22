<?php
include 'DeliveryDB/examples/DBconnect.php';
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


<body>
 <!--<script type="text/javascript">alert("Wellcome To Your Profile")</script>
     --> <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="main-panel" style="background-color:#FF9800; width: 100%;height: 660px;">
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
            
              <li class="nav-item dropdown" >
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <img src="not.png" style="width: 20px;height: 20px;"></img>
                  <!--Notifivation Bar-->
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"  >
                  <a class="dropdown-item" style="background-color:#FF9800;" href="#">Your Order is Placed</a>
                  <a class="dropdown-item" style="background-color:#FF9800;" href="#">Your Order is on its Way</a>
                  <a class="dropdown-item" style="background-color:#FF9800;" href="#">Your Order is Delivered</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="./user.html" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <img src="profile.png" style="height: 20px;width: 20px;">
                  <!--Person  image in png format navigation box-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                   <a class="dropdown-item" style="background-color:#FF9800;" href="delacc.php">Delete Account</a>
                  <a class="dropdown-item" style="background-color:#FF9800;" href="../../repass.php">change Password</a>
                  <a class="dropdown-item" style="background-color:#FF9800;" href="logout.php">Log out</a>
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
                <div class="card-header card-header-azure" style="background-color: black;">
                  <h4 class="card-title">
                   <?php $data=pg_query("select name from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['name'];
                    ?>
                  </h4>
                  <p class="card-category">Edit Your Profile</p>
                </div>
                <div class="card-body">
                  <form action="update.php" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username(Not Changeable)</label>
                          <input type="text" name="name"  class="form-control" value=" <?php $data=pg_query("select name from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['name'];
                    ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address(Not Changeable)</label>
                          <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="IT Is Not Changable" value="<?php $data=pg_query("select uemailid from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['uemailid'];
                    ?>" type="email" name="emailid" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                      <input name="firstname" value="<?php $data=pg_query("select firstname from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['firstname'];
                    ?>" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lastname" type="text" class="form-control"  value="<?php $data=pg_query("select lastname from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['lastname'];
                    ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input name="address" type="text" class="form-control"  value=" <?php $data=pg_query("select address from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['address'];
                    ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input maxlength="10" name="phoneno" type="text" class="form-control" pattern=".{10,}"  value=" <?php $data=pg_query("select phoneno from user1 where uemailid='$_SESSION[uid]'");
                       $row=pg_fetch_array($data);
                       echo $row['phoneno'];
                    ?>"  required >
                        </div>
                      </div>
                     
                     <br>
                    <button type="submit" class="btn pull-right" style="background-color:black; height: 50px;">Update Profile</button>
                   <a src="../../aulogin.php"> <button  class="btn pull-right" style="background-color:black; height: 50px;">Go Back</button></a>
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