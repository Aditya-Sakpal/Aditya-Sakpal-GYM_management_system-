<?php

include 'cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>
                    MY CART
                </h1>
            </div>

            <div class="col-lg-8">     
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $total=$total+$value['price'];
        echo"
        <tr>
        <td>1</td>
        <td>$value[name]</td>
        <td>$value[price]</td>
        <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'></td>
        <td>
        <form action='cart.php' method='POST'>
        <button name='remove' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='name' value='$value[name]'>
        </form>
        </td>
        </tr>
        ";
    }
}
    ?>
    
  
  </tbody>
</table>
</div>
<div class="col-lg-4">
  <div class="text-center border bg-light rounded p-4">
  <h3>Total:</h3>
  <h5 class="text-right"><?php echo $total;  ?></h5>
  <br>
  <button class="btn btn-dark btn-block">Make Purchase</button>
  </div>
</div>
</div>
    </div>
    
</body>
</html>