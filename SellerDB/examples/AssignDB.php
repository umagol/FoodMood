<?php
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
    Food Mood Assign Delivery Boy
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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a  class="simple-text logo-normal">
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
          <li class="nav-item ">
            <a class="nav-link" href="./listoi.php">
             
              <p>Add a Food</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./AssignDB.php">
              <p>Assign Delivery Boy</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <p>order</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: orange;height: 100%;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " >
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo" style="color: black">Assign Delivery Boy</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="profile.png" style="height: 20px;width: 20px;">
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
<?php
//This Code For  Assign Delivery boy in useing there area
echo"
      <div class='container'>
       <br><br><br><br>
<table class='table' border='1px' style='color:black; border:2px solid;'>
  <thead>
    <tr style='color: black; font-weight: bold;''>
      <th scope='col'>DeliveryBoy id</th>
      <th scope='col'>Name </th>
      <th scope='col'>Phone Number</th>
      <th scope='col'>Bike Number</th>
      <th scope='col'>Assign Boy</th>
    </tr>
  </thead>
  <tbody>
";
 $db=pg_query("select * from deliveryboy");
//$rowdb=pg_fetch_array($db);
$se=pg_query("select * from seller where semailid='$_SESSION[sid]';");
$rowse=pg_fetch_array($se);
$area=$rowse['area'];
//echo "$area<br>";
//$dbarea=$rowdb['area'];
//for($rowdb['area']=0;$rowdb['area']=$area;$rowdb['area']++)

while($rowdb=pg_fetch_array($db)) 
{
  if($rowdb['area']==$area)
  echo"
    <tr>
      <th scope='row'>$rowdb[demailid]</th>
      <td> $rowdb[dbname]</td>
      <td>$rowdb[phoneno]</td>
      <td>$rowdb[bikeno]</td>
      <th scope='col'><form method='POST' action='dbassign.php'> <button name='adb' value='$rowdb[dbid]'>Assign</button></form></th>
    </tr>";
  }

  echo"</tbody>
</table>
     </div>";
?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>