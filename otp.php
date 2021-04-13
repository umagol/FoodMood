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
         .container {
            padding: 16px;
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
height:60px;
            margin: 0px;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

        .fpw {
            width: 30%;
            height: 25%;
            align-content: center;
            background-color: white;
            opacity: 70%;
            padding-top: 65px;
        }

        .otp {
            border-color: #148F77;
            border-radius: 120px;
            align-items: center;
        }

        .cen {
            text-align: center;
        }
    </style>
</head>

<body>
    <ul align="center" id="fixed_bar" class="wrapper cen" style="margin-left:0px;">
        <img src="image/foodmoodhead.jpg" style=" width: 40px; height:40px; margin-top:0px; padding-bottom:15px;  ">
        <b style="font-size: 40px;color:white;"> Food Mood</b>
    </ul>

    <!--  Email Division is start  -->
    <div class="img-fluid con" align="center"
        style=" padding-top: 150px; background-image: url(image/FM.png); width: 100% ;height:600px;">
        <div align="center" class="fpw">
            <form action="repass.html" method="post"">
               <span >   Enter The OTP:-  </span>
                <input class=" otp" type="text" name="tp" pattern=".{4,}" title="In valid OTP" placeholder="   Enter the OTP" required> 
                <br> 
                <br>
                <button type="submit" class="btn-success"> Submit </button>
                <br>
               <small style=" font-size: 10px; margin-left: 300px;"> <a href="resendotp.html"> Re-Send OTP </a></small>
            </form>
        </div>
        <small style="color: white; font-size: 10px;"> OTP is send By in 2 min you have not got OTP Please Enter the Resend option 
            <br>Thank you..... </small>
    </div>


<footer style="width: 100%; height: 10%; margin-bottom: 0%; background-color:black">
    <div class="container " style="font-size: 15px;">
        <p class="  text-white small">
            <u class=" text-muted">Team Member's :- </u>
            <br>
            <br>
            <ul style="font-size: 12px;">
                <li style="padding-left: 20px; padding-right: 20px;"> Nikita Ve. </li>
                <li style="padding-left: 20px; padding-right: 20px;">Bhavana Shelar</li>
                <li style="padding-left: 20px; padding-right: 20px;">Satish Umagol</li>
            </ul>

            <span style="float: right;" class="text-muted">Name:-Ankita A.</span>
        </p>
    </div>
    <!-- /.container -->
</footer>

</body>
</html>
