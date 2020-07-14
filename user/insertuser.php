<?php

include('../includes/db.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass=password_hash($pass, PASSWORD_DEFAULT);

if(!isset($_SESSION['id'])){
    header('Location: ../home.php');
    exit();
}


mysqli_query($conn, "insert into users(FNAME, LNAME, email, Password) values
                           ('{$fname}', '{$lname}', '{$email}','{$pass}')");

header("Location: myaccount.php");
exit();
