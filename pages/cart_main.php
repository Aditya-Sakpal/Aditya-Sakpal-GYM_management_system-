<?php
// include('config.php');


// $name = $_POST['pname'];
// $price = $_POST['pprice'];
// $quantity = 1;

// // echo "$name <br>";
// $check = "select *from products where pname = '$name'";
// $check2 = mysqli_query($connection,$check);
// // print_r($check2);

// if(mysqli_num_rows($check2)==0){

// $query = "insert into products values('$name','$price','$quantity')";
// $result = mysqli_query($connection,$query);
// // header("location: cart_main.php");
// }
// else 
// {
// // header("location: cart_main.php");
// echo "<br> already added";



// }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">
<style>
body{
  background:url("cartbg.jpg");
  position:relative;
  height:100vh;
  /* width:100%; */
  
  background-size:cover;
  background-position:center center;
}
.container {
  position: relative;
  
}

/* .center {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
} */
/* 
img { 
  width: 100%;
  height: auto;
  opacity: 0.3;
} */
.a1{
  opacity:.8;
}
.a2{
  color:#fff;
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
        margin-top:300px;

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
    .a3{
      width:100%;
    }




    

    .btn2 {
        display: inline-block;
        /* background: #ff523b; */
        /* sunset orange */
        color: #fff;
        /* white */
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background 0.5s;
        opacity:0.8s;
    }

    .btn2:hover {
        background: #563434;
        /* medium dark shade of red */
    }
</style>
</head>
<body>



<div class="container">
<div class="center">

<div class="a2   col-lg-12 text-center my-5">
                <h1>
                    CART
                </h1>
               
            </div>
<div class="a1">            
<table class="table table-striped table-dark" name="tb1">
  <thead class="text-center">
    <tr>
      <th scope="col">SR NO</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Increament</th>
      <th scope="col">Total</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>

<?php

include('config.php');




$query = "select * from products;";
$result = mysqli_query($connection,$query);
// $result_rows = mysqli_num_rows($result);
$a=0;
$totalsum=0;
if($result_rows > 0)
{
 while($row = mysqli_fetch_assoc($result))
{
  //echo "name ".$row['product_name']." price ".$row['product_price']." quantity ".$row['product_quantity']." "."<br>";
$n=$row['pprice']*$row['pquantity'];
$totalsum=$totalsum+$n;  
$a=$a+1;

?>

  <tbody class="text-center">
    <tr>
      <th scope="row"><?php echo $a; ?></th>
      <td> <?php echo $row['pname']; ?> </td>
      <td> <?php echo $row['pprice']; ?> </td>
      <td> <?php echo $row['pquantity']; ?> </td>
      
      <td> 
<form action="cart_change.php" method="POST"> 

<button name="b1" type="submit" value="1" class="btn btn-light btn-sm">-</button>
<button name="b1" type="submit" value="2" class="btn btn-light btn-sm">+</button>
<input type="hidden" name="h1" value="<?php echo $row['pname']; ?>">

</form>
      </td>
      <td> <?php echo $row['pprice']*$row['pquantity']; ?> </td>
      <td>
<form action="cart_remove.php" method="POST">   
<button name="r1" type="submit" value="<?php echo $row['pname']; ?>" class="btn btn-light btn-sm">Remove</button>

</form>
      </td>
    </tr>

   
    
    
<?php
}
}

?>

</tbody>
</table>
<a href="consumer.php">
<input type="submit" name="submit" placeholder="submit" value="MAKE PAYMENT &#8594 <?php echo"Rs.", $totalsum,"/-";?>" class="btn2 text-black">
</a>
</div>
</div>
</div>



<!--footer section start -->
    <!-- http://www.w3.org/2000/svg -->
    <div class="a3">
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
    </div>
</body>
</html>