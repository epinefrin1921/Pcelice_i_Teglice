<?php

session_start();

include('../includes/db.php');

$id = $_GET['id'];

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');

    exit();
}

mysqli_query($conn, 'delete from users where UID=' . $id);

header('Location: allusers.php');
exit();
