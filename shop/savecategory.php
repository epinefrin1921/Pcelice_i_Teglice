<?php

session_start();

include('../includes/db.php');

$name = $_POST['name'];
$text = $_POST['text'];
$id = $_GET['id'];

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

mysqli_query($conn, "update category set CNAME = '{$name}', CDESCRIPTION='{$text}' where CID = '{$id}'");

header('Location: ../shop/addcategory.php');

exit();