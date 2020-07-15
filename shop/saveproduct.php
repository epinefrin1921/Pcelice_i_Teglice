<?php

function checkRequiredField($value)
{
    return isset($value) && !empty($value);
}
include('../includes/db.php');
session_start();
if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}


$name = $_POST['name'];
$text = $_POST['text'];
$kolicina=$_POST['kolicina'];
$cijena=$_POST['cijena'];
$kategorija=$_POST['kategorija'];
$id=$_GET['id'];


if(!checkRequiredField($_FILES['image']['name'])){
    mysqli_query($conn, "update items 
                           set Name='{$name}', Price='{$cijena}', Quantity= '{$kolicina}', Description='{$text}', CategoryID='{$kategorija}'
                           where ID= ".$id);
}
else{
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $image);
    mysqli_query($conn, "update items 
                           set Name='{$name}', Price='{$cijena}', Quantity= '{$kolicina}', Description='{$text}', Image='{$image}', CategoryID='{$kategorija}'
                           where ID= ".$id);
}

$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $image);



header('Location: ../shop.php');
exit();