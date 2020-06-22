<?php
include '../DBconnect.php';

$emailid=$_COOKIE['emailid'];
$uname=$_COOKIE['uname'];
$pass=$_COOKIE['pass'];


?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" href="LOGO.png" type="image/png" />
<meta charset="UTF-8">
<title>FOOD MOOD </title>

<head>
    <link rel="stylesheet" href="C:\Users\satish\Desktop\Food Mood\bt\css\bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            padding: 4px;
        }
input
{
background-color:#FAD7A0;
height:25px;
}


        body {
            font-family: Arial, Helvetica, sans-serif;
            size: cover;
            background-repeat: no-repeat;
            margin: 0px;
            padding: 0px;
        }

        ul {
            list-style-type: none;
            margin: 0px;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

        .fpw {
            width: 50%;
            height: 70%;
            align-content: center;
            background-color: #FAD7A0;  
            padding-top: px;
            border-radius: 20px;
        }

        .otp {
            border-color: #AF601A;  
            align-items: center;
        }


       .cen {
            text-align: center;
        }
input
{
border-radius:20px; 

}
.button
{


            background-color: #FAD7A0;  

}

    </style>
</head>

<body>
    <ul align="center" id="fixed_bar" class="wrapper cen" style="margin-left:0px;">
        <img src="foodmoodhead.jpg" style=" width: 45px; height:45px; margin-top:0px; ">
        <b style="font-size: 40px;color:white;"> Food Mood</b>
    </ul>

    <!--  Email Division is start  -->
    

<ul>
<div class="img-fluid con" align="center"
        style=" padding-top:20px; background-image: url(FM.png); width:100%; height:730px;">
        <div align="center"  class="fpw" style="text-justify-center;">
            <form action="../regseller.php" method="post">
          <h3 style="color: darkgrey; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            <br>
                <u> Register As A Seller</u>
          </h3>
              
          <span style="color: black; font-size: 13px; "> Enter Your First name:- </span></td>
          <input class=" otp" type="text" name="firstname" placeholder="  Enter Your first name " required></td>           
<br><br>

          <span style="color: black; font-size: 13px; "> Enter Your Last name:- </span></td>
          <input class=" otp" type="text" name="lastname" placeholder="  Enter Your last name " required></td>           
<br><br>
          <span style="color: black; font-size: 13px; "> Enter Your Adhar Number :- </span></td>
          <input class=" otp" type="text" pattern=".{12,}" maxlength="12" title="Enter Exactly 12 digits" name="Adhrno" placeholder="   Enter Your Adhar number" required></td>
<br> <br> 
          <span style="color: black; font-size: 13px; "> Enter Your Phone Number:- </span>
          <input class=" otp" maxlength="10" type="text" pattern=".{10,}" title="Enter Exactly 10 digits" name="phoneno" placeholder="   Enter Your Phone no." required>
<br> <br>     
         <span style="color: black; font-size: 13px; "> Enter Your PAN Number (optional):- </span>
         <input class=" otp" type="text" name="panno" maxlength="10" pattern=".{10,}" title="Enter Exactly 10 digits"  placeholder="   Enter Your PAN Number" >
<br> <br>
 <span style="color: black; font-size: 13px; "> Enter Your Address :- </span>
         <input class=" otp" type="text" name="address"  placeholder="         Enter Your Address" style="height: 60px;" required>
<br> <br>
<span style="color: black; font-size: 13px; "> Enter the Area Where You Want To Sell Food :- </span>
  
<select name="area">
  <option name="Kothrud">Kothrud</option>
  <option name="Sadashiv peth">Sadashiv Peth</option>
  <option name="Katraj">Katraj</option>

</select><br><br>
         <span style="color: black; font-size: 13px;"> Upload your Profile image :- 
         </span>
         <input type="file" accept="image/*">
<br><br>
         <button type="submit" class="button" style="border-radius: 30px;" > Submit </button>
         <a src="../registers.php"><button class="button" style="border-radius: 30px;" ><a src="../registers.php"> Go Back </a></button>
         </a>
             </form>
        </div>
      
        <small style="color: white; font-size: 10px;"> Please Enter the Correct  information
            <br>Thank you..... </small>
    </div>

</ul>
<!------------------------------------- FOOTER is start----------------------------------------------------->
    <footer style="width: 100%; height: 10%; margin-bottom: 0%; background-color:black; color:white;">
    <div class="container " style="font-size: 15px;">
        <p class="  text-white small">
            <u class="" >Team Members :- </u>
            <br>
            <ul  style="font-size: 12px; list-style-type: circle; background-color:black;color:white; ">
                <li style="padding-left: 20px; padding-right: 20px;"> Nikita Vyavhare </li>
                <li style="padding-left: 20px; padding-right: 20px;">Bhavana Shelar</li>
                <li style="padding-left: 20px; padding-right: 20px;">Satish Umagol</li>
            </ul>
            <span style="float: right;" class="text-muted">Name:-Ankita Athavale</span>
        </p>
    </div>
        <!-- /.container -->
</footer>   
</body>
</html>