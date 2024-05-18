<?php
include 'config.php';
if(isset($_REQUEST["submit"])){
    $id=$_REQUEST["id"];
    $name=$_REQUEST["name"];
    $period=$_REQUEST["period"];
    $amount=$_REQUEST["amount"];

    $ins="INSERT INTO biling(id,name,period,amount) VALUES ('$id','$name','$period','$amount')";
    $query1=mysqli_query($connection,$ins);
}

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
    <link rel="stylesheet" type="text/css" href="biling.css">

    <!--website background links end-->

    <style>
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
        margin-left:405px;
    }
    /* nav ul li {
        list-style-type: none;
        display: inline-block;
        padding: 0px 0px;
        height: 5px;
    } */
    </style>
</head>

<body>

    <!--navbar start-->
    <div>
        <nav class="nav" navbar-custom>
            <!-- <img src="logo.png" alt="gym logo" width="200" height="200"> -->
            <ul>
                <!-- <li><img src="newgymlogo2.png"></li> -->
                <li><a href="admin-login.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="coach.php">COACHES</a></li>
                <li><a href="members.php">MEMBERS</a></li>
                <li><a href="plan.php">PLANS</a></li>
                <li><a href="receptionist.php">SUPPLEMENTS</a></li>
            </ul>
        </nav>
</div>
    <!--navbar end-->
    
    <!--formstart-->
    <div class="container">
        <!-- <img src="login.jpg"> -->
        <form style="position:relative; left:0px; bottom:-100px">
            <div class="form-imput ">
                <label for="inputEmail4" class="form-control text-light">BILLING ID</label>
                <input type=" id" class="form-control text-light" id="inputEmail4" name="id" placeholder="id">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control text-light">MEMBER NAME</label>
                <input type=" id" class="form-control text-light" id="inputEmail4" name="name" placeholder="name">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control text-light">PERIOD</label>
                <input type=" id" class="form-control text-light" id="inputEmail4" name="period" placeholder="period">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control text-light">AMOUNT</label>
                <input type=" id" class="form-control text-light" id="inputEmail4" name="amount" placeholder="amount">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control text-light">SUBMIT</label>
                <input type="submit" class="form-control text-light" id="inputAddress2" name="submit" placeholder="submit" Value="submit">
            </div>

        </form>
</div>
    <!--formend-->




</body>

</html>