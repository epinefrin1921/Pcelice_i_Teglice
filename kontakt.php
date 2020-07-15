<?php
session_start();
$ime=$_POST['name'];
$email=$_POST['email'];
$poruka=$_POST['message'];

mail($email,'Hvala na upitu ', 'Poštovani, Hvala Vam na upitu. Ubrzo ćemo Vas kontaktirati');
mail('info@pceliceiteglice.ba','Novi upit ', 'Poštovani, Imate novi upit od '. $ime. ' koji pita: '.$poruka.'. Email: '.$email);

header("Location: index.php");
exit();