<?php

session_start();

include('../includes/db.php');

$id = $_GET['id'];

if(!isset($_SESSION['id'])){
    header('Location: ../home.php');
    exit();
}

mysqli_query($conn, 'update category set deleted=sysdate() where CID=' . $id);

header('Location: ../shop/addcategory.php');
exit();
