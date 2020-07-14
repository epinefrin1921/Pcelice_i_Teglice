<?php
session_start();
include('../includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, 'update items set DateDeleted=null where ID=' . $id);

header('Location: ../shop.php');
exit();
