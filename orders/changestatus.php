<?php
session_start();
include ('../includes/db.php');

$id=$_GET['id'];
$status=$_POST['status'];

mysqli_query($conn, "update orders set Status='{$status}' where OID='{$id}'");

$link='Location: singleorder.php?id='.$id;
header($link);
exit();