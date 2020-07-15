<?php
session_start();
include ('../includes/db.php');

$id=$_GET['id'];
$status=$_POST['status'];

mysqli_query($conn, "update orders set Status='{$status}' where OID='{$id}'");

if($status=='poslano'){
    mail($email,'Pčelice i teglica - poslano ', 'Poštovani, Vaša narudžba je poslana. Ubrzo očekujte poziv od kurira brze pošte.');
}
if($status=='zavrseno'){
    mail($email,'Pčelice i teglica - završeno ', 'Poštovani, Hvala Vam na narudžbi. Uživajte!');
}
$link='Location: singleorder.php?id='.$id;
header($link);
exit();