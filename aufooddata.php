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

      
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

     
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
      
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
           padding: 16px;
    padding-left:1px;
      width:540px;
        
}

        span.psw {
            float: right;
            padding-top: 16px;
        }

     
        .modal {



            display: none;
          
            position: fixed;
           
            z-index: 1;

            left: 0;
            top: 0;
            width: 100%;
            
            height: 100%;
          
            overflow: auto;
           
            background-color: rgb(0, 0, 0);
     
            background-color: rgba(0, 0, 0, 0.4);
           
            padding-top: 60px;
        }

    
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 55%;
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
            ul {
        list-style-type: none;
        margin: 0px;
        padding: 0;
        overflow: hidden;
        background-color:black;
       
       
    }

    li {
        float: left;
        border-right: 1px solid #bbb;
    }


    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }
    


h1 {
    color: #FFFFFF;
  display: block;
  margin: 0 auto 25px auto;
  text-align: center;
  font-size: 50px;
  font-weight: 600;
  }
small {
    color: #FFFFFF;
  display: block;
  margin: 0 auto 60px auto;
  text-align: center;
  font-weight: 400;
  font-size: 0.92em;}







*, *:before, *:after {
  -webkit-tap-highlight-color: transparent;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  user-select: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  padding: 0;
  margin: 0;
}
a, a:visited, a:hover {
  color: inherit;
  text-decoration: none;
}

.container1 {
    margin-top: 0px;
  position: relative;
  margin:  auto;
  padding: 200px;
  width: 100%;
  max-width: 840px;
}
.search-box {
  position: relative;
  width: 100%;
  max-width: 360px;
  height: 45px;
  border-radius: 120px;
  margin: 0 auto;
    align-content: center;
}
.search-icon, .go-icon {
  position: absolute;
  top: 0;
  height: 60px;
  width: 86px;
  line-height: 61px;
  text-align: center;
}
.search-icon {
  left: 0;
  pointer-events: none;
  font-size: 1.22em;
  will-change: transform;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform-origin: center center;
  -webkit-transform-origin: center center;
  -moz-transform-origin: center center;
  -o-transform-origin: center center;
  transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.si-rotate {
  transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
}
.go-icon {
  right: 0;
  pointer-events: none;
  font-size: 1.38em;
  will-change: opacity;
  cursor: default;
  opacity: 0;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.go-in {
  opacity: 1;
  pointer-events: all;
  cursor: pointer;
  transform: rotate(0);
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -o-transform: rotate(0);
  transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -webkit-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -moz-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
  -o-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
}
.search-border {
  display: block;
  width: 100%;
  max-width: 360px;
  height: 60px;
}
.border {
  fill: none;
  stroke: #FFFFFF;
  stroke-width: 5;
  stroke-miterlimit: 10;
}
.border {
  stroke-dasharray: 740;
  stroke-dashoffset: 0;
  transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -webkit-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -moz-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
  -o-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
}
.border-searching .border {
  stroke-dasharray: 740;
  stroke-dashoffset: 459;
  transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -webkit-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -moz-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
  -o-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
}
#search {
  font-family: 'Montserrat Alternates', sans-serif;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 120px;
  border: none;
  background: rgba(255,255,255,0);
  padding: 0 68px 0 68px;
  color: #FFFFFF;
  font-size: 1.32em;
  font-weight: 400;
  letter-spacing: -0.015em;
  outline: none;
}
#search::-webkit-input-placeholder {color: #FFFFFF;}
#search::-moz-placeholder {color: #FFFFFF;}
#search:-ms-input-placeholder {color: #FFFFFF;}
#search:-moz-placeholder {color: #FFFFFF;}
#search::-moz-selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}
#search::selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}

.con
{
    margin-top: 0px;
}




    </style>
</head>

<body>

<ul id="fixed_bar" class="wrapper" style="margin-left:0px; height:70px">
  <img  src="image/foodmoodhead.jpg" style="width: 50px;height: 50px; margin-left: 8px;margin-top: 0px; padding-bottom: 20px;">
    <b  style="font-size: 45px;color:white">  Food Mood</b>
   <a href="SellerDB/examples/uprofile.php">  <img src="image/userhome.png" onclick="document.getElementById('id01').style.display='block'" style="width:3.5%;float:right; margin-right: 5px;"></a>
<a href="aulogin.php">
        <button href="aulogin.php" style="display: block;width:auto;float:right; margin-right: 5px; align-content: center;">Go Back</button>
     </a>
    </ul>
    
<div class="img-fluid con" style="background-image: url(image/FM.png); width: 100% ;height: 700px; padding-top: 20px; ">
<?php
$search=$_POST['search'];
//setcookie('search','$search');
$s=pg_query("select * from food where foodname='$search'");
while ($row=pg_fetch_array($s))
{
//if ($search==$row['foodname']) {
echo"
        <div  class='card card-outline-secondary my-4' style='width: 100%;'>
          <div  class='card-header'>
            Reasult
          </div>
          <div class='card-body'><div><img src='image/FM.png' width='100px' height='100px' > <h3>";echo $row['foodname'];      echo"</h3></div>
            <p>";echo $row['description']; echo"</p>
            <small class='' style='float: left ; color:black'> Price :- Rs.";echo $row['price']; echo" </small>  <br> <small  style='float: left;color:black'> Discount :- ";echo $row['discount']; echo" </small>  
            <form action='food/buyfood.php' method='POST'>
            <button name='satish' value='$row[foodname]' href='buyfood.php'style='width:auto;float:right;margin-right:4px;'>Buy</button></form>
          </div>
        </div>
";
}
//}
//$fsearch=$_POST['search'];
//$fs=pg_query("select * from food");
//$rowf=pg_fetch_array($fs);
//$fname=$rowf['fid'];
//setcookie('search',$_POST['search']);
//echo $_SESSION['foodname'];
?>
    <!-----------------------------------   search box coding is strat----------------
        <div align="center" class="container1">
            <div class="search-box">
                <div class="search-icon"></div>
                <form action="" class="search-form">
                    <input type="text" placeholder="Search" id="search" autocomplete="off" style="margin-top: 0px">
                </form>
                <svg class="search-border" version="1.1" x="0px" y="0px" viewBox="0 0 671 111"
                    style="enable-background:new 0 0 671 111;" xml:space="preserve">
                    <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                    <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                </svg>
                <div class="go-icon"></div>
            </div>
        </div>
</div>-->
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<script>
   
    var modal = document.getElementById('id02');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
 
</body>

</html>