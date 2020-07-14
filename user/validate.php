<?php
session_start();

include ('../includes/db.php');


$email=$_POST['email'];
$pass=$_POST['password'];

if($statement=$conn->prepare("select UID, Password from users where email=?")){
    $statement->bind_param('s',$email);

    $statement->execute();

    $statement->bind_result($row, $password);

    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}

if(password_verify($pass, $password)){
    $_SESSION['id']=$row;
    header('Location: myaccount.php');
    exit();
}
else{
    header('Location: login.php');
    exit();
}