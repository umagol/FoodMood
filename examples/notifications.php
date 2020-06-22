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
    Food Mood Notifications
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
          <li class="nav-item ">
            <a class="nav-link" href="./listoi.php">
              <p>Add a food</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./AssignDB.php">
              <p>Assign Delivery Boy </p>
            </a>
          </li>

          
          <li class="nav-item active ">
            <a class="nav-link" href="./notifications.php">
              <p>Order</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: orange;height: 100%;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" style="color: black;" href="#pablo">Order</a>
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
                  <img src="profile.png" style="width: 20px;height: 20px;"></img> <!--Person-->
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                   <a class="dropdown-item" style="background-color: orange;" href="sdelacc.php">Delete Account</a>
                  <a class="dropdown-item" style="background-color: orange;" href="changepss.php">change Password</a>
                  <a style="background-color: orange;" class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- black color is giving all nevigation bar o first 100%div color clancel and then div s form -->
      



<?php
//This Code For  Assign Delivery boy in useing there area
echo"
      
";
$se=pg_query("select * from seller where semailid='$_SESSION[sid]';");
$rowse=pg_fetch_array($se);
$sid=$rowse['sid'];

//Order Is show
 $db=pg_query("select * from order1 where sid='$sid';");
$rowdb=pg_fetch_array($db);
// 
//Food table
if(!$rowdb)
{
echo "<br><br><br><br>You Can't Have Any Order";
}
else
{
$fd=pg_query("select * from food where fid='$rowdb[foodid]';");

$fdo=pg_fetch_array($fd);
$fid=$fdo['fid'];


//user is table
 $u=pg_query("select * from user1 where uid='$rowdb[uid]';");
$udo=pg_fetch_array($u);
//$rowdb['area']==$area)
  echo"
  <div class='container'>
       <br><br><br><br>
<table class='table' border='1px' style='color:black; border:2px solid;'>
  <thead>
    <tr style='color: black; font-weight: bold;''>
      <th scope='col'>Food Name</th>
      <th scope='col'>User Name</th>
      <th scope='col'>User phone No. </th>
      <th scope='col'>User Email-id</th>
      <th scope='col'>Assign Delivery Boy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>$fdo[foodname]</th>
      <td> $udo[name]</td>
      <td>$udo[phoneno]</td>
      <td>$udo[uemailid]</td>
      <th scope='col'><form method='POST' action='assigndb.php'> <button>Assign</button></form></th>
    </tr>";

  echo"</tbody>
</table>
     </div>";

}
?>






  <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
</body>

</html>
