<?php
session_start();

include ('../includes/db.php');

$id=$_GET['id'];

if(!isset($_SESSION['id'])){
    header('Location: ../home.php');
    exit();
}
mysqli_query($conn, 'update items set DateDeleted=sysdate() where ID='.$id);

header('Location: ../shop.php');
exit();
