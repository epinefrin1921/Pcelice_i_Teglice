<?php

session_start();
if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

include('../includes/db.php');

$name = $_POST['name'];
$text = $_POST['text'];
$kolicina=$_POST['kolicina'];
$cijena=$_POST['cijena'];
$kategorija=$_POST['kategorija'];
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $image);


mysqli_query($conn, "insert into items(Name, Price, Quantity, Description, CategoryID, Image) values
                           ('{$name}', '{$cijena}', '{$kolicina}','{$text}', '{$kategorija}','{$image}' )");

header('Location: ../shop.php');
exit();