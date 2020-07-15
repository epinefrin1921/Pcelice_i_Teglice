<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
include ('../includes/db.php');

$id=$_GET['id'];

mysqli_query($conn, 'update items set DateDeleted=sysdate() where ID='.$id);

header('Location: ../shop.php');
exit();
