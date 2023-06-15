<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

*{
   margin:0px;
   padding:0px;
   box-sizing:border-box; 
}
body{
    font-family:"Lato",sans-serif;
    
}
.pricing-table{
    background:#fff;/*light red*/ 
    padding:40px 20px;

}
.pricing-table .details{
    width:90%;
    max-width:500px;
    text-align:center;
    margin:0 auto;
    padding:40px 20px;
}
.pricing-table .details h2{
    font-size:30px;
    margin-bottom:10px;
}
.pricing-table .details p{
    font-size:20px;
    color:#000;
}
.pricing-table .grid{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:20px 0px;
    padding:20px;   
    /* justify-content:space-between; */
}
.pricing-table .grid .box{
    width:250px;
    border:1px solid #eee;
    text-align:center;
    padding:20px;
    background:#fff;/*white*/
    border-radius:10px;
    box-shadow:0px 2px 10px 5px rgba(0,0,0,0.05);
    /* justify-content:space-between; */
}
.pricing-table .grid .box:hover{
    transform: scale(1.1);
    transition: .3s;
}
.pricing-table .grid .box .title{
    font-size:16px;
    font-weight:600;
    margin-bottom:20px;
    color:#555;/**gray */  
}
.pricing-table .grid .box .price{
    margin-bottom:20px;
}
.pricing-table .grid .box .price b{
    display:block;
    font-size:40px;
    margin-bottom:-5px;
}
.pricing-table .grid .box .features > *{
    color:#555/**gray */;
    padding:8px 0px;
    border-bottom:1px solid rgba(0,0,0,0.2);
}
.pricing-table .grid .box .button button{
    width:100%;
    margin:25px 0px 0px;
    padding:10px;
    background:linear-gradient(to bottom,#3a7bd5,#3a6073);
    /* background:linear-gradient(to bottom,#000000,#656565); */
    color:#fff;
    border-radius:5px;
    outline:none;
    border:none;
    font-weight:600;
    cursor:pointer;
}
.pricing-table .grid .box .button button:hover{
    transform: scale(1.3);
        transition: .3s;
}
.pricing-table .grid .box.inter{
    transform:scale(1.1);
    background:linear-gradient(to bottom,#3a7bd5,#3a6073);
    /* background:linear-gradient(to bottom,#000000,#656565); */
    margin-right:50px;
    margin-left:50px;
    /* justify-content:space-around; */
}
.pricing-table .grid .box.inter:hover{
    transform: scale(1.2);
        transition: .3s;
}
.pricing-table .grid .box.inter .title{
    color:#eee;/**light gray */
}
.pricing-table .grid .box.inter .price{
    color:#fff;/**white */
}
.pricing-table .grid .box.inter .price span{
    color:#fff;/**white */
}
.pricing-table .grid .box.inter .features > *{
    color:#fff;
    border-bottom:1px solid rgba(255,255,255,0.5);
}
.pricing-table .grid .box.inter .button button{
    background:#fff;
    color:#3a6073;
}
@media(max-width:804px){
    .pricing-table .grid{
        gap:20px;
    }
    .pricing-table .grid .box.inter{
        transform:scale(1);
    }
}

/**navbar css */
nav {
        height: 0px;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
        background-size: cover;
        background-position: center;
        /* padding-bottom: 1000px; */
        float: inline-block;
        position: absolute;
        padding-left: 100px;
        /* background-color: black; */
        /* height: 10px; */
    }

    nav ul {
        /* padding-left: 200px; */
        padding-top: 20px;
        padding-left: 250px;
        /* padding:10px 20px;*/
        margin: 0;
        padding: 0;

    }

    nav ul li {
        list-style-type: none;
        display: inline-block;
        padding: 10px 20px;
        height: 50px;
    }

    nav ul li a {
        color: rgba(rgb(255, 255, 255));
        font-weight: lighter;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: blue;
        width: 100px;
        display: block;
        padding: 25px 20px;
    }

    nav ul li a:hover {
        color: rgb(125, 74, 227);
        transition: .1s;
        transform: scale(1.2);
        
    }

 .idk {
        width: 50px;
        height: 50px;
        position: absolute;
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
<body>
    <section class="main">
<div class="nav1">
            <!--navabar start-->
            <nav class="nav">

                <ul>
                    <!-- <li><div class="idk"><img src="newgymlogo2.png" class="gymlogo" width="100" height="50"></div></li> -->
                    <li><a href="#">      </a></li>
                    
                    <li><a href="admin-login.php">HOME</a></li>
                    <li><a href="biling.php">BILING</a></li>
                    <li><a href="members.php">MEMBERS</a></li>
                    <li><a href="receptionist.php">SUPPLEMENTS</a></li>
                    <li><a href="coach.php">COACHES</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    
                    <li><a href="prime.php">V.I.Ps</a></li>
                </ul>
            </nav>
        </div>









    <div class="pricing-table">
        <div class="details">
            <h2>Packages</h2>
            <p>Avail additional benefits</p>
        </div>
        <div class="grid">
            <div class="box basic">
                
                <div class="title">
                    Basic
                </div>
                <div class="price">
                    <b>Rs 10,000</b>
                    <br>
                    <span>1 year subscription</span>
                </div>
                <div class="features">
                    <div><h6>Addtional Perks</h6></div>
                    <div>Access to Steam bath</div>
                    <div>Free diet plan</div>
                    <div>-</div>
                    <div>-</div>
                    <div>-</div>
                </div>
                <div class="button">
                
                <form action="basic.php">  
                <button type="submit" value="submit" placeholder="submit">Subscribe</button>
                </form>
            
                </div>            
            </div>
            

            <div class="box inter">
            <div class="title">
                    Professional
                </div>
                <div class="price">
                    <b>Rs 50,000</b>
                    <br>
                    <span>5 year subscription</span>
                </div>
                <div class="features">
                    <div><h6>Addtional Perks</h6></div>
                    <div>Access to Steam bath</div>
                    <div>Free diet plan</div>
                    <div>Acesss to Massage section</div>
                    <div>Crossfit</div>
                    <div>Acess to Cafe section</div>
                    <div>Free steriods</div>
                    <div>Personal Trainer</div>
                    <div>24 hours access to the gym</div>
                </div>
                <div class="button">
                    <form action="pro.php" method="POST">
                    <button type="submit" value="submit" placeholder="submit">Subscribe</button>
                    </form>
                </div>
            </div>         

            <div class="box pro">
            <div class="title">
                    Intermediate
                </div>
                <div class="price">
                    <b>Rs 30,000</b>
                    <br>
                    <span>3 year subscription</span>
                </div>
                <div class="features">
                    <div><h6>Addtional Perks</h6></div>
                    <div>Access to Steam bath</div>
                    <div>Free diet plan</div>
                    <div>Acesss to Massage section</div>
                    <div>Crossfit</div>
                    <div>Acess to Cafe section</div>
                    
                </div>
                <div class="button">
                    <form action="intermediate.php" method="POST">
                    <button type="submit" value="submit" placeholder="submit">Subscribe</button>
                    </form>
                </div>
            </div> 
            
            

        </div>
    </div>
    </section>



    <!--footer section start -->
    <!-- http://www.w3.org/2000/svg -->
    <footer>
        <p>MUSCLE MANUFACTURER</p>
        <p>OUR SOCIAL MEDIA</p>
        <div class="social">
            <a href="https://www.facebook.com/aditya.sakpal.792740">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" href="https://www.instagram.com/aditya_sakpal123/">
                     Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.
                    <path
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                   
                    </svg></a>

            <a href="https://www.instagram.com/aditya_sakpal123/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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