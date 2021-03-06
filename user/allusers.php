<?php
include('../includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];


$query=mysqli_query($conn, 'select * from users');


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Pčelice i Teglice</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/nivo-lightbox.css">
    <link rel="stylesheet" href="../css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel="stylesheet" href="../css/flexslider.css">

    <link rel="stylesheet" href="../css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<?php
include ('../includes/header.php');
?>

<!-- Video section -->
<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Svi zaposleni </h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    Ovdje možete vidjeti koje osobe imaju administratorska prava
                </p>
            </div>

        </div>
    </div>
</section>

<?php
include ('../includes/adminheader.php');
?>

<div class="forma container">
    <h3>Spisak osoba:</h3>
    <?php
    while($row=mysqli_fetch_assoc($query)): ?>
        <p>Name: <?= $row['FNAME'] ?></p>
        <p>Last name: <?= $row['LNAME'] ?></p>
        <p>Email: <?= $row['email'] ?></p>
        <?php
        if(isset($_SESSION['id'])): ?>
            <a href="deleteuser.php?id=<?= $row['UID']?>">Izbrisi osobu</a>
        <?php endif; ?>
    <br><br><br>
    <?php endwhile; ?>

</div>

<?php
include('../includes/footer.php');
?>

<!-- javscript js -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery.magnific-popup.min.js"></script>

<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>

<script src="../js/isotope.js"></script>
<script src="../js/imagesloaded.min.js"></script>
<script src="../js/nivo-lightbox.min.js"></script>

<script src="../js/jquery.flexslider-min.js"></script>

<script src="../js/jquery.parallax.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>

<script src="../js/custom.js"></script>

</body>
</html>