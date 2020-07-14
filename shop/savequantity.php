<?php
include ('../includes/db.php');
session_start();
$id=$_GET['id'];
$quant=$_POST['quantity'];

if(!isset($_SESSION['id'])){
    header('Location: ../home.php');
    exit();
}

$query=mysqli_query($conn, 'update items set Quantity=Quantity + '.$quant.' where ID= '.$id);

$url='Location: ../shop/singleproducts.php?id='.$id;
header($url);
exit();