<?php
include 'config.php';
if(isset($_REQUEST["submit"])){
    $id=$_REQUEST["id"];
    $name=$_REQUEST["name"];
    

    $ins="INSERT INTO propack(id,name) VALUES ('$id','$name')";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
    padding:0;
    margin:0;
    font-family:'Josefin Sans', sans-serif;
    box-sizing: border-box;
    background-image: url(basic.jpg);
    background-color: rgba(0, 0, 0, 0.6); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
}
/* body{
    background-image: url(basic.jpg);
    background-color: rgba(0, 0, 0, 0.6); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
} */
/* section{
    background-image: url(basic.jpg);
    background-color: rgba(0, 0, 0, 0.6); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
} */
nav{
    height:10px;
    width:100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6));
    background-size:cover;
    background-position:center;
    /* padding-bottom: 1000px; */
    float:inline-block;
    position:absolute;
  
    /* margin-left: 250px; */
    /* padding-left: 300px; */
}

   



nav ul{
    /* padding-left: 200px; */
    padding-top: 20px;
    padding-left: 250px;
    /* padding:10px 20px;*/
    
}
nav ul li{
    list-style-type: none;
    display:inline-block;
    padding:10px 20px;
  
   
    
}
nav ul li a{
    color:rgba(rgb(0, 0, 0));
    font-weight: lighter;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   
}

nav ul li a:hover{
    color:rgb(111, 47, 47);
    transition: .1s;
    
}
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
    color:#fff;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	/* color: #2980b9;  */
    color:#fff;
}

.form-input:nth-child(2)::before{
	content: "\f023";
    color:#fff;
}

.btn-login{
	padding: 15px 25px;
	border: none;
	/* background-color: #27ae60; */
	color: #fff;
}
nav ul li a{
    color:black;
}

.details{
    width:90%;
    max-width:500px;
    text-align:center;
    margin:0 auto;
    padding:40px 20px;
    color:#fff;
}
.details h2{
    font-size:30px;
    margin-bottom:10px;
    color:#fff;
}
.details h5{
    font-size:30px;
    margin-bottom:10px;
    color:#fff;
}

.details p{
    font-size:20px;
    color:#fff;
}
.form-imput{

}
label{

}

/**footer css */

footer {
        position: relative;
        width: 100%;
        height: 400px;
        background: #000000;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top:1000px;
    }

    footer p:nth-child(1) {
        font-size: 30px;
        color: white;
        margin-bottom: 20px;
        font-weight: bold;
    }

    footer p:nth-child(2) {
        font-size: 15px;
        color: white;
        margin-bottom: 20px;
        font-weight: bold;
    }

    footer p :end {
        color: white;
        font-size: 17px;
        width: 500px;
        text-align: center;
        line-height: 26px;
    }

    .social {
        display: flex;
    }

    .social a {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border-radius: 50%;
        margin: 22px 10px;
        color: #ffffff;
    }

    .social a:hover {
        transform: scale(1.3);
        transition: .3s;
    }

    span {
        color: #f9004d;
    }


    </style>
</head>

<body>

    <!-- navbar start
    <div>
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
    
<section class="main">
    <div class="details">
            <h2>Professional Package</h2>
            <p>Avail additional benefits</p>
            <h5>You are a prime member now!</h5>
        </div>
    <!--formstart-->
    <div class="container">
        <!-- <img src="login.jpg"> -->
        <form style="position:relative; left:0px; bottom:-100px">
            <div class="form-imput">
                <label for="inputEmail4" class="form-control" style="color:white">BILLING ID</label>
                <input type=" id" class="form-control" id="inputEmail4" name="id" placeholder="id" style="color:white">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control" style="color:white">MEMBER NAME</label>
                <input type=" id" class="form-control" id="inputEmail4" name="name" placeholder="name" style="color:white">
            </div>







            <!-- <div class="form-imput">
                <label for="inputEmail4" class="form-control">PERIOD</label>
                <input type=" id" class="form-control" id="inputEmail4" name="period" placeholder="period">
            </div>
            <div class="form-imput">
                <label for="inputEmail4" class="form-control">AMOUNT</label>
                <input type=" id" class="form-control" id="inputEmail4" name="amount" placeholder="amount">
            </div>-->
            <div class="form-imput">
                <!-- <label for="inputEmail4" class="form-control text-center" style="color:white">SUBMIT</label> -->
                <input type="submit" class="form-control" id="inputAddress2" name="submit" placeholder="submit" Value="SUBMIT" style="color:white">
            </div>

        </form>
</div>
    <!--formend-->

    </section>


</body>

</html>