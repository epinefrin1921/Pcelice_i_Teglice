<?php
session_start();

include ('../includes/db.php');

$id=$_GET['id'];
$quantity=$_POST['quantity'];

$query=mysqli_query($conn, 'select * from items where ID='.$id);
$row=mysqli_fetch_assoc($query);
$price=$row['Price'];
$_SESSION['total']+=$price*$quantity;

if($quantity>$row['Quantity']){
    header('Location: ../error.php');
    unset($_SESSION['isUpdate']);
    unset($_SESSION['product_added']);
    unset($_SESSION['order_placed']);
    unset($_SESSION['total']);
    $_SESSION['products']=[];

    exit();
}


foreach($_SESSION['products'] as $index=>$item){
    if($item[0]==$id){
        $_SESSION['products'][$index][1]+=$quantity;
        $_SESSION['product_added']=true;
        header('Location: ../shop.php');
        exit();
    }
}
if(!empty($_SESSION['products']))
{
    $_SESSION['products'] = array_merge($_SESSION['products'], array(
            array($id, $quantity)
        )
    );
}
else{
    $_SESSION['products']=array(
        array($id, $quantity)
    );
}
$_SESSION['product_added']=true;
header('Location: ../shop.php');
exit();