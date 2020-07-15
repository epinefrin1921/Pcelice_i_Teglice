<?php
session_start();
function checkRequiredField($value)
{
    return isset($value) && !empty($value);
}
include('../includes/db.php');


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$id=$_GET['id'];

if(!checkRequiredField($_POST['password'])){
        mysqli_query($conn, "update users 
                           set FNAME='{$fname}', LNAME='{$lname}', email= '{$email}'   
                       where UID= ".$id);
}
else{
    $pass=$_POST['password'];
    $pass=password_hash($pass, PASSWORD_DEFAULT);
    mysqli_query($conn, "update users 
                           set FNAME='{$fname}', LNAME='{$lname}', email= '{$email}', Password='{$pass}'
                           where UID= ".$id);
}

$_SESSION['msg']='Account saved!';

header("Location: ../user/myaccount.php");
exit();