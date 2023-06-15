<?php
include('config.php');

$change1 = $_REQUEST['b1'];
$val = $_REQUEST['h1'];

$check_quantity = "select pquantity from products where pname = '$val';";
$result = mysqli_query($connection, $check_quantity);

while($row = mysqli_fetch_assoc($result))
{
  echo " quantity first ".$row['pquantity']." "."<br>";
  $var = $row['pquantity'];
}  



if($change1 === "2")
{
$sql = "update products set pquantity = pquantity+1 where pname= '$val' ;";
 if(mysqli_query($connection,$sql))
 {
  header("location: cart_main.php");
 }
}
else
if ($var>1)
{

{
$sql = "update products set pquantity = pquantity-1 where pname='$val';";
 if(mysqli_query($connection,$sql))
 {
  header("location: cart_main.php");
 }
}

}
else
header("location: cart_main.php");


?>