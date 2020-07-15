<?php
include ('../includes/db.php');
$id=$_GET['id'];
$quant=$_POST['quantity'];

session_start();
if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$query=mysqli_query($conn, 'update items set Quantity=Quantity + '.$quant.' where ID= '.$id);

$url='Location: ../shop/singleproducts.php?id='.$id;
header($url);
exit();