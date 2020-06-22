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
            height: 50%;
            align-content: center;
            background-color: white;
            opacity: 70%;
            padding-top: 65px;
        }

        .otp {
            border-color: #148F77;
            border-radius: 120px;
            align-items: center;
            width: 50%;
        }

        .cen {
            text-align: center;
        }
    </style>
</head>

<body>
    <ul align="center" id="fixed_bar" class="wrapper cen" style="margin-left:0px;">
        <img src="image/foodmoodhead.jpg" style=" width: 45px; height:60px; margin-top:0px; padding-bottom:15px;  ">
        <b style="font-size: 40px;color:white;"> Food Mood</b>
    </ul>
    <!--  Email Division is start  -->

    <div class="img-fluid con" align="center" style=" padding-top: 150px; background-image: url(image/FM.png); width: 100% ;height: 700px;">
        <div align="center" class="fpw">
            <form action="drepass.php" method="post">
               <span > Enter the new Password:- </span>
                <input class=" otp" type="pass" name="pass" pattern=".{8,}" placeholder="   Enter The New Password" title="Minimum 8 character " required>
                <br>
                <br>
            <span> Re-enter the new Password:- </span>
                <input class=" otp" type="repass" name="repass" pattern=".{8,}" title="Minimum 8 character" placeholder="   Enter The New Password" required>
                <br>
                <br>
                <button type="submit" class="btn-success"> Submit </button>
               
            </form>
            <br>
             <a href="SellerDB/examples/DeliveryDB/examples/user.php" ><button type="submit" class="btn-success"> Go Back </button>
                </a>
        </div>
<small style="color: white; font-size: 10px;"> You Got OTP so Re-enter the Password and remember it
    <br>Thank you..... </small>
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

<?php
include 'DBconnect.php';
$pass=$_POST['pass'];
pg_query("update deliveryboy set password='$pass' where demailid='$_SESSION[did]'");

pg_query("update login set password='$_POST[pass]' where id='$_SESSION[did]'");
//$_SESSION['did']=$uemailid;
//echo "<script>alert('Your Password Will Be Changed') </script>";
//header("Location: SellerDB/examples/DeliveryDB/examples/user.php");
/*
else
{
header("drepass.php");   
}*/
?>