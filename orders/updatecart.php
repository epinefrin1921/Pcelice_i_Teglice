<?php

session_start();
include ('../includes/db.php');
$product = $_GET['id'];
$quantity = $_POST['quantity'];



foreach ($_SESSION['products'] as $index => $item) {
    if ($item[0] == $product) {

        $query=mysqli_query($conn, 'select * from items where ID='.$product);
        $row=mysqli_fetch_assoc($query);
        $price=$row['Price'];

        if($quantity>$row['Quantity']){
            header('Location: ../error.php');
            unset($_SESSION['isUpdate']);
            unset($_SESSION['product_added']);
            unset($_SESSION['order_placed']);
            unset($_SESSION['total']);
            $_SESSION['products']=[];

            exit();
        }

        $_SESSION['total']-=$price*$item[1];
        $_SESSION['total']+=$price*$quantity;
        $_SESSION['products'][$index][1] = $quantity;
        break;
    }
}

header('Location: ../cart.php');