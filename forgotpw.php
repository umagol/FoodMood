<?php
include 'DBconnect.php';
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" href="image/LOGO.png" type="image/png" />
<meta charset="UTF-8">
<title>FOOD MOOD </title>
<head>
    <link rel="stylesheet" href="bt/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

 body {
            font-family: Arial, Helvetica, sans-serif;
             size: cover;
           background-repeat:no-repeat;
         
            margin: 0px;
            padding: 0px;
        }
    ul
      {
        list-style-type: none;
        margin: 0px;
        padding: 0;
        overflow: hidden;
        background-color:black;
       }
.fpw
 {
    width: 40%;
    height: 50%;
    align-content: center;
    background-color: white;
    opacity: 70%;
    padding-top: 65px;
}  
.otp
{
    border-color:#148F77;
    border-radius: 120px;  
    align-items: center;
}
.cen
{
    text-align: center;
}
    </style>
</head>
<body>
    <ul align="center" id="fixed_bar" class="wrapper cen" style="margin-left:0px;">
        <img src="image/foodmoodhead.jpg" style=" width: 45px; height:60px; margin-top:0px; padding-bottom:15px;  " >
         <b  style="font-size: 40px;color:white;">   Food Mood</b>
    </ul>
<!--  Email Division is start  -->

    <div class="img-fluid con" align="center"  style=" padding-top: 150px; background-image: url(image/FM.png); width: 100% ;height: 700px;">
        <h1 style="color: white;" > <b> Food Mood </b></h1>
        <div align="center" class="fpw">
            <table>
            <form action="repass.php" method="post">
               <span >   Enter The Email Id</span>
                <input class="otp" type="text" name="eid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Your Valid Email Id " placeholder="   Enter the Email-Id" required ><br><br>
                <span >   Enter The User Name</span>
                <input class="otp" type="text" name="uname" title="Enter Your Valid uname " placeholder="   Enter the User Name" required ><br><br>
                <span >   Enter The Phone Number</span>
                <input class="otp" type="text" name="pno" pattern=".{10,0}" title="Enter Your Valid Uname " placeholder="   Enter the Phone Number" required >
                <br>
                <br>
                <button type="submit" class="btn-success"> Submit </button>
            </form>
        </table>
        </div>
<small style="color: white; font-size: 10px;"> You Are Forgot Your Password Don't wary We Will Manage Please Enter your Valid Email Id<br> Thank You... </small>
    </div>

<!-- Footer -->     
<footer style="width: 100%; height: 10%; margin-bottom: 0%; background-color:black">
    <div class="container ">
        <p class="m-0 text-center text-white small">
<u>Team Member's :- </u>
<br>
Nikita Ve.
<br>
Bhavana Shelar
<br>
Satish Umagol
<br>
Teacher Name:-Ankita A.
</p>
</div>

</footer>
</body>
</html>
