<?php

include 'config.php';
//isset is used to see a variable is set or not

//agar apne ko pata na ho ki konsa method use howa hai form mai toh phir $_REQUEST use karo
if(isset($_REQUEST["submit"])){
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
   

    $ins="INSERT INTO users(username,password) VALUES ('$username','$password')";
    $query1=mysqli_query($connection,$ins);
    
    if(isset($_POST['g-recaptcha-response'])){
        $recaptcha=$_POST['g-recaptcha-response'];

        if(!$recaptcha){
            // echo '<script>alert("Captcha Dalo") </script>';
            exit;
        }
        else{
            $secret="6LdGlO0iAAAAAC0Yt1K4FsWz9psxZukkNHGz0WYL";
            $url='https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha;
            $response=file_get_contents($url);
            $responseKeys=json_decode($response,true);
        }
    }
}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--website background ke liye-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossrigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap rel='stylesheet' ">
    <link rel="stylesheet" type="text/css" href="coach.css"> -->
    <!--website background links end-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin-login.css">
    <style>
    /* .navbar-custom {
        background-color: black;
        height: 10px;The display property specifies the display behavior (the type of rendering box) of an element.
    } */

    body {
        background-image: url(gymbackground3.jpeg);
        /* background-image: url('gymbackground.jpg'); */
        /* <img src="gymbackground.jpeg" width:"500" height:"500"> */
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-size: 100% 100%;
        /* width: 50px;  */
        /* height:100vh; */
    }
   
    </style>
</head>

<body>

    <!-- <div style="width:200">

</div> -->
    <!-- <div style="background-image: url('background.jpg')"> -->


    <div>
        <!--navabar start-->
        <nav class="nav navbar-custom" >
            <img src="newgymlogo2.png" alt="gym logo" width="100" height="100">
            <ul>

                <li><a href="biling.php">BILING</a></li>
                <li><a href="coach.php">COACHES</a></li>
                <li><a href="members.php">MEMBERS</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="plan.php">PLANS</a></li>
                <li><a href="receptionist.php">SUPPLEMENTS</a></li>
            </ul>
        </nav>


    </div>
    <!-- navabar end-->

    <!--service section start-->
    <!-- <div class="service" style="position:relative; left:0px; bottom:-600px">
        <div class="title">
            <h2>OUR SERVICES</h2>
        </div>

        <div class="box">
            <div class="card">
            <i class="fa-solid fa-bars"></i>
            <h5>
                BODYBUILDING
            </h5>
            <div class="pra">
                <p>hanny rambot</p>
                <p style="text-align: center">
                    <a class ="button" href="#">READ MORE</a>
                </p>
            </div>
            </div>

            <div class="card">
            <i class="fa-solid fa-user"></i>
            <h5>
                POWERLIFTING
            </h5>
            <div class="pra">
                <p>chad NICHOLLES</p>
                <p style="text-align: center">
                    <a class ="button" href="#">READ MORE</a>
                </p>
            </div>
            </div>
        </div>
    </div> -->


    <!--service section end-->

    



  
</body>

</html>