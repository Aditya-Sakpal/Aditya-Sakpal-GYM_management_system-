<?php
include('config.php');

if(isset($_POST['submit'])){
    header("location: cart_main.php");
}
$name = $_POST['pname'];
$price = $_POST['pprice'];
$quantity = 1;

// echo "$name <br>";
$check = "select *from products where pname = '$name'";
$check2 = mysqli_query($connection,$check);
// print_r($check2);

if(mysqli_num_rows($check2)==0){

$query = "insert into products values('$name','$price','$quantity')";
$result = mysqli_query($connection,$query);
// header("location: cart_main.php");
}
else 
{
// header("location: cart_main.php");
echo "<br> already added";
}


















































// session_start();

// include 'config.php';

// if($_SERVER["REQUEST_METHOD"]=="POST"){

//     if(isset($_POST['submit'])){
        
    
//         if(isset($_SESSION['cart'])){

         
//             $myitems=array_column($_SESSION['cart'],'name');
//             if(in_array($_POST['pname'],$myitems))
//             {
//                 echo"Item Already Added";
//                 // header("location:cart_main.php");
//             }
            
//              $count=count($_SESSION['cart']);
//             $_SESSION['cart'][0]=array('name'=>$_POST['pname'],'price'=>$_POST['pprice'],'quantity'=>1);   
//             header("location:cart_main.php");
//             // print_r($_SESSION['cart']);
//         }
//          else
//         {
//         $_SESSION['cart'][0]=array('name'=>$_POST['pname'],'price'=>$_POST['pprice'],'quantity'=>1);
//         // print_r($_SESSION['cart']);
//         echo"Item Added";

//         }   
//     }
//     if(isset($_POST['remove'])){
//         foreach($_SESSION['cart'] as $key => $value){
//             if($value['name']==$_POST['name']){
//                 unset($_SESSION['cart'][$key]);
//                 $_SESSION['cart']=array_values($_SESSION['cart']);
//                 header("location:cart_main.php");
//             }
//         }
//     } 
// }
?>