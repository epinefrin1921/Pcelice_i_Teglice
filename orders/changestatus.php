<?php
session_start();
include ('../includes/db.php');

$id=$_GET['id'];
$status=$_POST['status'];

mysqli_query($conn, "update orders set Status='{$status}' where OID='{$id}'");
$query=mysqli_query($conn, 'select * from orders where OID='.$id);
$row=mysqli_fetch_assoc($query);
$email=$row['email'];
if(0==strcmp($status, 'poslano')){
    mail('nedzadm071@gmail.com','Pčelice i teglica - poslano ', 'Poštovani, poslali ste narudžbu. Kupcu je javljeno da očekuje poziv kurira brze pošte.');
    mail('nedim.ajdin1@gmail.com','Pčelice i teglica - poslano ', 'Poštovani, poslali ste narudžbu. Kupcu je javljeno da očekuje poziv kurira brze pošte.');
    mail($email,'Pčelice i teglica - poslano ', 'Poštovani, Vaša narudžba je poslana. Ubrzo očekujte poziv od kurira brze pošte.');
}
if(0==strcmp($status, 'zavrseno')){
    mail('nedzadm071@gmail.com','Pčelice i teglica - završeno ', 'Poštovani, Narudžba je završena.');
    mail($email,'Pčelice i teglica - završeno ', 'Poštovani, Hvala Vam na narudžbi. Uživajte!');
}
$link='Location: singleorder.php?id='.$id;
header($link);
exit();