<?php
include 'DBconnect.php';

$uname=$_POST['uname'];
$emailid=$_POST['emailid'];  
$pass=$_POST['psw'];
setcookie('uname',$uname);
setcookie('emailid',$emailid);
setcookie('pass',$pass);
//echo $_COOKIE['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="image/LOGO.png" type="image/png" />
    <link rel="stylesheet" href="bt/css/bootstrap.css">
    <title>Registration</title>
    <style>
        
 .container {
            padding: 16px;
        }
        .b1 {
        
            font-family: Arial, Helvetica, sans-serif;
             display: flex;
            justify-content: center;
            align-items: center;
            margin-top:50px;
            margin-bottom: 50px;
            
        }

        .flip-card-container {
            width: 300px;
            height: 400px;
            perspective: 1000px;
          
        }

        .flip-card {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 1s;
            transform-style: preserve-3d;
           
        }

        .flip-card-container:hover .flip-card {
            transform: rotateY(180deg);
            /* <=>  rotateY(.5turn) */
        }

        /* Position the front and back side */
        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
             border-radius: 20px;
             opacity: 50px;
        }

        .flip-card-front {
            background-color: wheat;
            /*background-color:black;
            */opacity: 50px;
            color:black;
            
        }

        .flip-card-back {
            background-color:#FE9A2E;
            color: #fff;
           transform: rotateY(180deg);
        }

        .flip-card-front {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            opacity: 50px;
        }

        .flip-card-back p {
            text-align: center;
            margin: 1rem;
            font-size: 1.4rem;
            line-height: 1.5rem;
        }

        .flip-card-back p span {
            display: block;
            font-size: 1rem;
            font-style: italic;
            font-weight: bold;
            margin-top: 1.25rem;
        }

        img {
            width: 70%;
            height: 54%;
        }


        ul {
            list-style-type: none;
            margin: 0px;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

 ul {
    list-style-type: none;
    margin: 0px;
    padding: 0;
    overflow: hidden;
    background-color: black;
    }
.cen {
            text-align: center;
        }

body{
    background-image: url(image/FM.png);
}

    </style>
</head>

<body>

   

<ul align="center" id="fixed_bar" class="wrapper cen" style="margin-left:0px;margine-bottom:100%;">
    <img src="image/foodmoodhead.jpg" style=" width: 45px; height:50px; margin-top:0px; padding-bottom:0px;  ">
    <b style="font-size: 40px;color:white;"> Food Mood</b>
</ul>
    <!---------------------Form is start ----------------------------->

<div class="b1" align="center" >
    <!----------------------- First division is statr-------------- -->
    <div class="flip-card-container" style="margin-right: 30px;">
        <div class="flip-card">
            <div class="flip-card-front">
                <p align="center"
                    style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    User
                    <br> <img style="width: 80%; height: 65%;" src="image/user.png" alt=" User Image">
                    <br>
                    <span style="font-size: 10px;" class="text-muted"> You are regitered as a User
                          Welcome to  Food Mood
                    </span>
                </p>
            </div>
            <div class="flip-card-back">
                <p>
                    <form action="Register/userr.php " method="post"
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        <h3>Welcome To User Services</h3>
                        <br> <button type="submit" class="btn-success" style="size: 30px;"> Register </button>
                   <br>
                <span style="font-size: 10px; color: black;" > Thank You For Sign Up.....
                </span>
                    </form>
                </p>
            </div>
        </div>
    </div>
<br>

    <!---------------------- Second division is statr ------------------->
    <div class="flip-card-container" style="margin-right: 30px;">
        <div class="flip-card">
            <div class="flip-card-front">
                <p align="center"
                    style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Seller
                    <br> <img style="width: 80%; height: 65%;" src="image/seller.png" alt=" User Image">
                    <br><span style="font-size: 10px;" class="text-muted"> You are regitered as a Seller
                      Welcome to Food Mood  </span>
                </p>
            </div>
            <div class="flip-card-back">
                <p>
                    <form action="Register/sellerr.php" method="post"
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        <h3>Welcome To Seller Services</h3>
                        <br> <button type="submit" class="btn-success" style="size: 30px;"> Register </button>
                    <br>
                    <span style="font-size: 10px; color: black;"> Thank You For Sign Up.....
                    </span>
                    </form>
                </p>
            </div>
        </div>
    </div>


    <!------------------------------------- Thired division is statr ----------------------------------->
    <div class="flip-card-container" style="margin-right: 30px;">

        <div class="flip-card">
            <div class="flip-card-front">
                <p align="center"
                    style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Delivery Boy
                    <br> <img style="width: 80%; height: 65%;" src="image/deliverboy.png" alt=" User Image">
                    <br>
                    <span style="font-size: 10px;" class="text-muted"> You are regitered as a Delivery Boy
                        Welcome to Food Mood </span>
                </p>
            </div>
            <div class="flip-card-back">
                <p>
                    <form action="Register/deliveryboyr.php" method="post" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                   <h3>Welcome To Delivery Services</h3>
                        <br> <button type="submit" class="btn-success" style="size: 30px;"> Register </button>
                       <br>
                        <span style="font-size: 10px; color: black;"> Thank You For Sign Up.....
                        </span>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>


<!--------------------Footer is start------------------->
<footer style="width: 100%; height: 10%; margin-bottom: 0%; background-color:black">
    <div class="container " style="font-size: 15px;">
        <p class="  text-white small">
            <u class=" text-muted">Team Members:- </u>
            <br>
            <ul  style="font-size: 12px; list-style-type: circle;">
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
