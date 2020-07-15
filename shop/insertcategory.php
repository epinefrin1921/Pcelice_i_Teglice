<?php

session_start();

include('../includes/db.php');

$name = $_POST['name'];
$text = $_POST['text'];

if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

mysqli_query($conn, "insert into category(CNAME, CDESCRIPTION) values
                           ('{$name}','{$text}')");

header('Location: ../shop/addcategory.php');

exit();