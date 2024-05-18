<?php
require 'config.php';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <!--website background links start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossrigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap rel='stylesheet' ">
    <!-- <link rel="stylesheet" type="text/css" href="biling.css"> -->

    <!--website background links end-->

    <style>
        *{
    padding:0;
    margin:0;
    font-family:'Josefin Sans', sans-serif;
    box-sizing: border-box;
    /* background-image: url(gymbackground.jpg); */
    background-color: rgba(0, 0, 0, 0.6); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
}
input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
    .navbar-custom {
        background-color: black;
        height: 10px;

    }
    .container label{
        color:black;
        
    }
    .container{
        /* margin-left: 300px; */
        width: 50%;
    }
    /* nav ul li {
        list-style-type: none;
        display: inline-block;
        padding: 0px 0px;
        height: 5px;
    } */
    *{
        background-image: url(consumerbg.jpg);
    }
    h3{
        margin-top:50px;
    }
    </style>
</head>

<body>

    <!--navbar start-->
    <!-- <div>
        <nav class="nav" navbar-custom> -->
            <!-- <img src="logo.png" alt="gym logo" width="200" height="200"> -->
            <!-- <ul> -->
                <!-- <li><img src="newgymlogo2.png"></li> -->
                <!-- <li><a href="admin-login.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="coach.php">COACHES</a></li>
                <li><a href="members.php">MEMBERS</a></li>
                <li><a href="plan.php">PLANS</a></li>
                <li><a href="receptionist.php">SUPPLEMENTS</a></li>
            </ul>
        </nav>
</div> -->
    <!--navbar end-->
    <h3 class="text-center text-dark">PAYMENT FORM</h3>
    <!--formstart-->
    <div class="container">
        <!-- <img src="login.jpg"> -->
        <form action='order.php' method='POST' style="position:relative; left:0px; bottom:-100px ">
            <!-- <div class="form-imput "> -->
                <label for="inputEmail4" class="form-control text-dark">NAME</label>
                <input type=" id" value="" class="form-control text-light" id="inputEmail4" name="name" required>
            <!-- </div> -->
            <!-- <div class="form-imput"> -->
                <label for="inputEmail4" class="form-control text-dark">PHONE NO.</label>
                <input type=" id" value="" class="form-control text-light" id="inputEmail4" name="phone" required>
            <!-- </div> -->
            <!-- <div class="form-imput "> -->
            <label for="inputEmail4" class="form-control text-dark">ADDRESS</label>
                <input type=" id" value="" class="form-control text-light" id="inputEmail4" name="address" required>
            <!-- </div> -->
            <!-- <div class="form-imput"> -->
                <label for="inputEmail4" class="form-control text-dark">EMAIL</label>
                <input type=" email" value="" class="form-control text-light" id="inputEmail4" name="email" required>
            <!-- </div> -->
            <!-- <div class="form-imput"> -->
                <!-- <label for="inputEmail4" class="form-control">SUBMIT</label> -->
                <!-- <div class="btn"> -->
                <input type="submit" class="form-control bg-light text-dark" id="inputAddress2" name="submit" placeholder="submit" Value="submit">
                <!-- </div> -->
            <!-- </div> -->

        </form>
</div>
    <!--formend-->




</body>

</html>