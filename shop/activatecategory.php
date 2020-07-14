<?php

session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
include('../includes/db.php');

$id = $_GET['id'];

mysqli_query($conn, 'update category set deleted=null where CID=' . $id);

header('Location: ../shop/addcategory.php');
exit();
