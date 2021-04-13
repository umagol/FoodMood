<?php
include "DBconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Food Mood Track User
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
          
          <li class="nav-item active ">
            <a class="nav-link" href="./map.php">
              <p>Map</p>
            </a>
          </li>

       <!--   <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <p>Notifications</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: orange;height: 100%">
      <!-- Navbar -->
      <div>
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Track Order</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          </div>
        </div>
      </nav>
      </div>
      <!-- End Navbar -->

 <!--<div class = "gfg">Track user</div> 
        <p>Display location in map</p> 
     -->
     <br><br><br>  <button style="margin-left: 30px;" class= "geeks" type="button" onclick="getlocation();"> 
            Current Position</button> <br><br>
        <div id="demo2" style="width: 80%; height: 78%;margin-left: 120px;"> 
              
        </div> 
        <script src="https://maps.google.com/maps/api/js?sensor=false"> 
              
        </script> 
        <script type="text/javascript"> 
        function getlocation(){ 
            if(navigator.geolocation){ 
                navigator.geolocation.getCurrentPosition(showLoc, errHand); 
            } 
        } 
        function showLoc(pos){ 
            latt = pos.coords.latitude; 
            long = pos.coords.longitude; 
            var lattlong = new google.maps.LatLng(18.5204, 73.8567); 
            var OPTions = { 
                center: lattlong, 
                zoom: 10, 
                mapTypeControl: true, 
                navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL} 
            } 
            var mapg = new google.maps.Map(document.getElementById("demo2"), OPTions); 
            var markerg =  
               new google.maps.Marker({position:lattlong, map:mapg, title:"You are here!"}); 
        } 
          
        function errHand(err) { 
            switch(err.code) { 
                case err.PERMISSION_DENIED: 
                    result.innerHTML = "The application doesn't have the permission"  +  
                               "to make use of location services" 
                    break; 
                case err.POSITION_UNAVAILABLE: 
                    result.innerHTML = "The location of the device is uncertain" 
                    break; 
                case err.TIMEOUT: 
                    result.innerHTML = "The request to get user location timed out" 
                    break; 
                case err.UNKNOWN_ERROR: 
                    result.innerHTML = "Time to fetch location information exceeded"+ 
                      "the maximum timeout interval" 
                    break; 
            }   
        } 
        </script> 

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 
</body>

</html>
