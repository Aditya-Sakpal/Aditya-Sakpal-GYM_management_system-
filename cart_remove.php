<?php
include('config.php');
$var = $_REQUEST['r1'];

$sql = "delete from products where pname = '$var'";
$result = mysqli_query($connection,$sql);

header("location: cart_main.php");


?>