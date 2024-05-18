<?php
include 'config.php';
if(isset($_POST["submit1"])){
    $sql = "truncate table products";
    $result1 = mysqli_query($connection,$sql);   
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- google fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossrigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap rel='stylesheet' ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- google fonts end -->


    <!-- <link rel="stylesheet" type="text/css" href="receptionist.css"> -->

    <!-- rating wale icon ke liye -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css"
        integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css"
        integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"
        integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    nav {
        flex: 1;
        text-align: right;
    }

    nav ul {
        display: inline-block;
        list-style-type: none;
    }

    nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    a {
        text-decoration: none;
        color: #555;
        /* shade of blue ^ */
    }

    p {
        color: #555;
    }

    .container {
        max-width: 1300px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .btn {
        display: inline-block;
        background: #ff523b;
        /* sunset orange */
        color: #fff;
        /* white */
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background 0.5s;
    }

    .btn:hover {
        background: #563434;
        /* medium dark shade of red */
    }

    .header {
        background: radial-gradient(#fff, #ffd6d6);
    }

    .header .row {
        margin-top: 70px;
        /* padding-left:20px; */
    }

    .small-container {
        max-width: 1080px;
        margin: auto;
        /* padding-left:25px;
    padding-right:25px; */
    }

    .small-container {
        /* padding-left:250px; */
    }

    .col-4 {
        flex-basis: 25%;
        padding: 10px;
        /* margin-left:20px; */
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }

    .col-4 img {
        width: 100%;
    }

    /* .navbar1 ul{
padding:0px;
width:100%;
} */
    .navbar2 {
        padding-right: 100px;
    }

    .navbar2 ul li {
        justify-content: space-between;
    }

    .navbar .col4 {
        padding: 20px;
    }

    .title {
        text-align: center;
        margin: 0 auto 80px;
        position: relative;
        line-height: 60px;
        color: #555;
        /* shade of blue */
    }

    .title::after {
        content: '';
        background: #ff523b;
        /* sunset orange */
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%);
    }

    h4 {
        color: #555;
        /* blue */
        font-weight: normal;
    }

    .col-4 p {
        font-size: 14px;
    }

    .categories {
        padding-left: 320px;
    }

    .rating .fa {
        color: #ff523b;
        /* sunset orange */
    }

    .col-4:hover {
        transform: translateY(-5px);
    }

    .col-5{
        padding-left:300px;
    }
    .col-5 p{
    color:#555;
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 45px;
    text-align:left;
    /* text-indent:5px; */

    }
    /**footer css */

    footer {
        position: relative;
        width: 100%;
        height: 300px;
        background: #000000;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
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
    .small-container1{
        padding-bottom:100px;
    }
    </style>

</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <!--navabar start-->

                <div class="logo">
                    <img src="newgymlogo2.png" width="125px">
                </div>
                <nav>
                    <ul>
    <li><a href="admin-login.php">HOME</a></li>
<li><a href="biling.php">BILING</a></li>
<li><a href="coach.php">COACHES</a></li>
<li><a href="members.php">MEMBERS</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="plan.php">PLANS</a></li>
<li><a href="cart_main.php"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                    </ul>
                </nav>
                <!--navbar end-->
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h1>
                    GET ENHANCED
                </h1>
                <p>
                    GET THE RIGHT NUTRITION HERE!
                </p>
                <a href="#rows" class="btn">EXPLORE NOW &#8594;</a>
                <!-- arrow code -->
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="protein1.jpg">
                </div>
                <div class="col-3">
                    <img src="protein2.jpg">
                </div>
                <div class="col-3">
                    <img src="protein3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">
            FEATURED PRODUCTS
        </h2>



        <div class="rows" id="rows">
            <nav class="navbar1">
                <ul>
                    <li>
                        <div class="col-4">
                            <img src="protein4.jpg">
                            <h4>ISOLATE PROTEIN</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Rs 2000.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="MUSCLE BLAZE ISOLATE WHEY">
                    <input type="hidden" name="pprice" value="2000">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein1.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>

                    <li>
                        <div class="col-4">
                            <img src="protein5.jpg">
                            <h4>BIOZYME PROTEIN</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Rs 3000.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="MUSCLE BLAZE BIOZYME WHEY">
                    <input type="hidden" name="pprice" value="3000">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein2.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>

                    <li>
                        <div class="col-4">
                            <img src="protein6.jpg">
                            <h4>CREATINE MONOHYDRATE</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Rs 4000.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="CREATINE MONOHYDRATE">
                    <input type="hidden" name="pprice" value="4000">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein3.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>
                </ul>
            </nav>






            <nav class="navbar2">
                <ul>
                    <li>
                        <div class="col-4">
                            <img src="protein8.jpeg">
                            <h4>MASS GAINER</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Rs 1000.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="MASS GAINER">
                    <input type="hidden" name="pprice" value="1000">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein4.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>

                    <li>
                        <div class="col-4">
                            <img src="protein7.jpg">
                            <h4>BCAA PRO</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Rs 2500.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="BCAA PRO">
                    <input type="hidden" name="pprice" value="2500">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein5.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>

                    <li>
                        <div class="col-4">
                            <img src="protein11.jpg">
                            <h4>FAT BURNER</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Rs 4000.00</p>
                            <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="FAT BURNER">
                    <input type="hidden" name="pprice" value="4000">
                    <button type="submit" name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
                            <a href="protein6.php" class="btn">BUY &#8594;</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- offer -->
    <div class="small-container1">
        <div class="row">
            
            <div class="col-2">
             <img src="protein12.jpg">
            </div>
           
             <div class="col-5">
                <p>EXCLUSIVE</p>
                <h4>LIMITED OFFER</h4>
                <h1>
                    TURKESTERONE
               </h1>
               <!-- <form action="cart.php" method="POST">
                    <input type="hidden" name="pname" value="TUKESTERONE">
                    <input type="hidden" name="pprice" value="5000">
                    <button type="submit"  name="submit" placeholder="submit" value="BUY &#8594" class="btn">BUY &#8594</button>
                    </form> -->
               <a href="protein7.php" class="btn">BUY &#8594;</a>
             </div>
             
        </div>
    </div>

<!--footer section start -->
    <!-- http://www.w3.org/2000/svg -->
    <footer>
        <p>MUSCLE MANUFACTURER</p>
        <p>OUR SOCIAL MEDIA</p>
        <div class="social">
            <a href="https://www.facebook.com/aditya.sakpal.792740">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    href="https://www.instagram.com/aditya_sakpal123/">
                    Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License -
                    https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.
                    <path
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />

                </svg></a>

            <a href="https://www.instagram.com/aditya_sakpal123/"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg></a>

            <a href="https://twitter.com/KINGAD33013413"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg></a>

        </div>
        <span>COPYRIGHT BY ADITYA</span>
    </footer>

</body>

</html>